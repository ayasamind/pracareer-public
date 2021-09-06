<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('company_id')->comment('企業ID');
            $table->text('title')->comment('募集タイトル');
            $table->string('sub_title', 250)->comment('募集サブタイトル');
            $table->text('body')->comment('募集本文');
            $table->string('main_image_url', 250)->default('')->comment('メイン画像');
            $table->string('sub_image_url1', 250)->default('')->comment('サブ画像1');
            $table->string('sub_image_url2', 250)->default('')->comment('サブ画像2');
            $table->string('sub_image_url3', 250)->default('')->comment('サブ画像3');
            $table->integer('status')->comment('募集ステータス');
            $table->string('shift', 250)->default('')->comment('希望頻度（シフト）');
            $table->string('term', 250)->default('')->comment('希望期間');
            $table->string('salary', 250)->default('')->comment('給与');
            $table->integer('prefecture')->nullable()->comment('都道府県');
            $table->string('place', 250)->default('')->comment('勤務地');
            $table->string('demand', 250)->default('')->comment('インターン生に求めること（仕事内容の紹介や求める人物像などについて）　＊100字以上');
            $table->string('experience', 250)->default('')->comment('インターンで経験できること　＊100字以上');
            $table->timestamps();

            $table->foreign('company_id')->references('id')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign(['company_id']);
        });
        Schema::drop('posts');
    }
}
