<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthStudentsInfoBmiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('health_students_info_bmi')) {
            Schema::create('health_students_info_bmi', function(Blueprint $table) {
                $table->id();
                $table->integer('gender')->index()->comment('1: Nam, 2: Nữ');
                $table->integer('month')->index();
                $table->softDeletes();
                $table->timestamps();
            });
        }
;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('health_students_info_bmi');
    }
}
