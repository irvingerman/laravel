<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResetPasswordOtpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('reset_password_otp')) {
            Schema::create('reset_password_otp', function (Blueprint $table) {

                $table->id();

                $table->string('phone')->index()->nullable();

                $table->integer('user_id')->index();

                $table->integer('moet_unit_id')->index()->default(0);

                $table->datetime('time_sent')->nullable();

                $table->datetime('expiry')->nullable();

                $table->integer('otp')->index();

                $table->text('content');

                $table->string('ip_sent')->nullable();

                $table->tinyInteger('status')->default(0)->comment('0 - not use; 1 - used');

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
        Schema::dropIfExists('reset_password_otp');
    }
}
