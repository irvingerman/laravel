<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthDeclarationAnswersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('health_declaration_answers')) {
            Schema::create('health_declaration_answers', function(Blueprint $table) {
                $table->id();
                $table->integer('question_id')->index();
                $table->integer('question_child_id')->nullable();
                $table->string('color');
                $table->text('content')->comment("Nội dung câu trả lời");
                $table->tinyInteger('type')->comment("Kiểu câu trả lời");
                $table->text('description')->comment("Mô tả câu trả lời");
                $table->text('evaluation_results')->nullable()->comment("Nội dung kết quả đánh giá theo câu");
                $table->text('advices')->nullable()->comment("Lời khuyên");
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
        Schema::dropIfExists('health_declaration_answers');
    }

}
