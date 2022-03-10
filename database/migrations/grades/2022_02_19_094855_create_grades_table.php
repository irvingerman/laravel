<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('grades')) {
            Schema::create('grades', function (Blueprint $table) {
                $table->id();
                $table->tinyInteger('educational_stages');
                $table->char('code', 50)->unique();
                $table->char('name', 250);
                $table->integer('index_order')->nullable()->default(0);
                $table->integer('status')->nullable()->default(STATUS_ACTIVE);
                $table->integer('created_user_id')->nullable()->default(0);
                $table->integer('modified_user_id')->nullable()->default(0);
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
        Schema::dropIfExists('grades');
    }
}
