<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('students')) {
            Schema::create('students', function (Blueprint $table) {
                $table->id();

                $table->integer('bo_id')->nullable()->default(0);
                $table->integer('department_id');
                $table->integer('division_id');
                $table->integer('school_id');
                $table->integer('school_year_id');
                $table->integer('grade_id');
                $table->integer('class_id');
                $table->integer('user_id');
                $table->tinyInteger('status')->nullable()->default(STATUS_ACTIVE);
                $table->integer('created_user_id')->nullable()->default(0);
                $table->integer('modified_user_id')->nullable()->default(0);

                $table->softDeletes();
                $table->timestamps();

                $table->index(['school_id', 'school_year_id', 'user_id'], '3-index');
                $table->index(['user_id', 'school_year_id'], '2-index');
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
        Schema::dropIfExists('students');
    }
}
