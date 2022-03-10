<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonComplete extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson_complete', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->comment('Id học viên');
            $table->bigInteger('lesson_id');
            $table->bigInteger('class_id');
            $table->tinyInteger('lesson_type')->comment('Lưu kiểu của bài học, 0:Nội dung bài học, 1: File, 2:link, 3:quiz');
            $table->bigInteger('lesson_type_id')->comment('Lưu id tương ứng với các type ở lesson_type');
            $table->bigInteger('created_user_id')->default(0);
            $table->bigInteger('modified_user_id')->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('lesson_complete');
    }
}
