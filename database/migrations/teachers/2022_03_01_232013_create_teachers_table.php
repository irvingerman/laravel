<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('students')) {
            Schema::create('teachers', function (Blueprint $table) {
                $table->id();

                $table->integer('bo_id')->nullable()->default(0);
                $table->integer('department_id');
                $table->integer('division_id');
                $table->integer('school_id');
                $table->integer('school_year_id');
                $table->integer('grade_id');
                $table->integer('class_id');
                $table->integer('user_id');
                $table->tinyInteger('status')->nullable()->default(TEACHER_STATUS_TEACHING);
                $table->integer('created_user_id')->nullable()->default(0);
                $table->integer('modified_user_id')->nullable()->default(0);

                $table->softDeletes();
                $table->timestamps();

                $table->index(['school_id', 'school_year_id', 'user_id'], 'index');
                $table->unique(['user_id', 'school_year_id'], 'unique');
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
        Schema::dropIfExists('teachers');
    }
}
