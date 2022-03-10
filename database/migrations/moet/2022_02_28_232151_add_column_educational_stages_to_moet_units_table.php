<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnEducationalStagesToMoetUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('moet_units', 'educational_stages'))
        {
            Schema::table('moet_units', function (Blueprint $table) {
                $table->tinyInteger('educational_stages')
                    ->nullable()
                    ->default(0)
                    ->comment('Cấp học')
                    ->after('moet_level');
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
        Schema::table('moet_units', function (Blueprint $table) {
            //
        });
    }
}
