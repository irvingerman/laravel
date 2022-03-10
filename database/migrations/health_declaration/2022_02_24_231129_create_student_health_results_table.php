<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentHealthResultsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('student_health_results')) {
            Schema::create('student_health_results', function(Blueprint $table) {
                $table->id();
                $table->integer('student_id')->index();
                $table->integer('moet_unit_id')->index();
                $table->date('date')->index();
                $table->integer('question_id')->index();
                $table->integer('answer_id')->index();
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
        Schema::dropIfExists('student_health_results');
    }

}
