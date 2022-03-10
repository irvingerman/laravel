<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthBmiTypesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('health_bmi_types')) {
            Schema::create('health_bmi_types', function(Blueprint $table) {
                $table->id();
                $table->double('name')->comment('1:-3SD, 2:-2SD, 3:-1SD, 4: MEDIAN, 5:1SD, 6:2SD, 7:3SD');;
                $table->text('evaluation_results')->nullable()->comment("Nội dung kết quả đánh giá theo câu");
                $table->text('advices')->nullable()->comment("Lời khuyên");
                $table->text('color')->nullable()->comment("Mã màu");
                $table->text('description')->comment("Moo tả");
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
        Schema::dropIfExists('health_bmi_types');
    }

}
