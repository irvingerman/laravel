<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatisticDeploymentClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('statistic_deployment_classes')) {
            Schema::create('statistic_deployment_classes', function (Blueprint $table) {
                $table->id();
                $table->integer('school_id')->index();
                $table->integer('school_year_id')->index();
                $table->integer('term_id')->index();
                $table->integer('grade_id')->index();
                $table->integer('class_id');
                $table->date('date')->index();
                $table->tinyInteger('month')->index();
                $table->string('data');
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
        Schema::dropIfExists('statistic_deployment_classes');
    }
}
