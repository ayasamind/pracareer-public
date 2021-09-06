<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('image_url')->comment('写真');
            $table->text('name')->comment('学生名');
            $table->date('birthday')->comment('生年月日');
            $table->text('university')->comment('大学');
            $table->text('department')->comment('学部');
            $table->integer('graduate_year')->comment('卒業年度');
            $table->integer('gender')->comment('性別');
            $table->string('phone_number')->comment('電話番号');
            $table->text('password')->comment('パスワード');
            $table->string('twitter_id', 250)->default('')->comment('Twitter ID');
            $table->string('line_id',250)->default('')->comment('LINE ID');
            $table->string('facebook_id', 250)->default('')->comment('Facebook ID');
            $table->string('twitter_url', 250)->default('')->comment('Twitter URL');
            $table->string('facebook_url', 250)->default('')->comment('Facebook URL');
            $table->string('instagram_url', 250)->default('')->comment('Instagram URL');;
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('students');
    }
}
