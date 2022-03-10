<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonClasses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson_classes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('lesson_id');
            $table->bigInteger('class_id');
            $table->bigInteger('moet_unit_id');
            $table->integer('sort_index')->nullable();
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
        Schema::dropIfExists('lesson_classes');
    }
}
