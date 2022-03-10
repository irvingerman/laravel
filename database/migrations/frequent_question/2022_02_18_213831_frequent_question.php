<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FrequentQuestion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('frequent_question')) {
            Schema::create('frequent_question', function (Blueprint $table) {
                $table->id();
                $table->bigInteger('tenant_id');
                $table->text('content'); // Nội dung
                $table->text('description'); // cau trả lời
                $table->text('tags')->nullable(); // Chủ đề
                $table->text('scope')->nullable(); // phạm vi
                $table->float('user_know')->nullable(); // số người tiếp cận
                $table->bigInteger('created_user_id')->default(0);
                $table->bigInteger('modified_user_id')->default(0);
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
        //
    }
}
