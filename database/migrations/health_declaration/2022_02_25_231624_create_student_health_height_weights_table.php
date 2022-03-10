<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentHealthHeightWeightsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('student_health_height_weights')) {
            Schema::create('student_health_height_weights', function(Blueprint $table) {
                $table->id();
                $table->integer('student_id')->index();
                $table->date('date')->index();
                $table->double('weight');
                $table->double('height');
                $table->double('bmi_int')->comment("Giá trị bmi tính ra theo công thức");
                $table->integer('bmi_id')->index()->nullable();
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
        Schema::dropIfExists('student_health_weights');
    }

}
