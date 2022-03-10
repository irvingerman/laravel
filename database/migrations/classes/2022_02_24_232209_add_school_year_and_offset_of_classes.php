<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSchoolYearAndOffsetOfClasses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('classes','school_year_id' )) {
            Schema::table('classes', function (Blueprint $table) {
                $table->integer('school_year_id')->index('school_year_indexes')->default(0);
                $table->integer('offset')->default(0);
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
        Schema::table('classes', function (Blueprint $table) {
            $table->dropColumn(['school_year_id','offset']);
        });
    }
}
