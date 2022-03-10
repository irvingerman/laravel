<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthDeclarationTypesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('health_declaration_types')) {
            Schema::create('health_declaration_types', function(Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->text('description');
                $table->string('image')->nullable();
                $table->integer('parent_id')->nullable()->index();
                $table->tinyInteger('statistic_type')
                    ->nullable()
                    ->comment("1: Chỉ cần 1 câu trả lời đỏ học sinh sẽ dược tính 1 bản ghi thống kê; 2: Phụ thuộc vào question_key_id");
                $table->integer('question_key_id')->nullable()->comment("Id của câu hỏi đánh giá thống kê");
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
        Schema::dropIfExists('health_declaration_types');
    }

}
