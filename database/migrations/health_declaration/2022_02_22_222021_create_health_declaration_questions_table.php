<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthDeclarationQuestionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('health_declaration_questions')) {
            Schema::create('health_declaration_questions', function(Blueprint $table) {
                $table->id();
                $table->integer('type_id')->index();
                $table->text('title');
                $table->text('description')->comment("Mô tả câu hỏi");
                $table->tinyInteger('type')->default(1)->comment('1: Trắc nghiệm, 2: Nhập text');
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
        Schema::dropIfExists('health_declaration_questions');
    }

}
