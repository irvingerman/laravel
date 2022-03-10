<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthBmiTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('health_bmi')) {
            Schema::create('health_bmi', function(Blueprint $table) {
                $table->id();
                $table->integer('student_info_id')->index();
                $table->double('value')->index();
                $table->tinyInteger('type_id')
                    ->index()
                    ->comment('1:-3SD, 2:-2SD, 3:-1SD, 4: MEDIAN, 5:1SD, 6:2SD, 7:3SD');
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
        Schema::dropIfExists('health_bmi');
    }

}
