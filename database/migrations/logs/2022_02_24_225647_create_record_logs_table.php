<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('record_logs')) {
            Schema::create('record_logs', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('item_id');
                $table->string('item_type')->nullable();
                $table->string('item_table')->nullable();
                $table->string('action')->nullable();
                $table->longText('data')->nullable();
                $table->longText('update_data')->nullable();
                $table->longText('after_data')->nullable();
                $table->integer('user_id')->index()->nullable();
                $table->string('ip')->nullable();
                $table->string('agent')->nullable();
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
        Schema::dropIfExists('record_logs');
    }
}
