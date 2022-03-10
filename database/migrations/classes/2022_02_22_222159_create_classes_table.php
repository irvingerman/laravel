<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('classes')) {

            Schema::create('classes', function (Blueprint $table) {
                $table->id();
                $table->string('sis_id')->nullable();
                $table->string('name');
                $table->integer('school_id')->index('school_indexes');
                $table->integer('grade_id')->index('grade_indexes');
                $table->integer('main_teacher_id')->index('main_teacher_indexes');
                $table->softDeletes();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
}
