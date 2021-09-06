<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentEmailTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_email', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('student_id')->comment('学生ID');
            $table->string('email', 250)->unique()->comment('学生メールアドレス');
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('student_email', function (Blueprint $table) {
            $table->dropForeign(['student_id']);
        });
        Schema::drop('student_email');
    }
}
