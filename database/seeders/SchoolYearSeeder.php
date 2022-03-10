<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolYearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db_school_years = DB::table('school_years')->get();
        if(empty($db_school_years) || count($db_school_years) == 0) {
            DB::table('school_years')->insert([
                'code' => '2021-2022',
                'name' => 'Năm học 2021-2022',
                'start_date' => '2021-08-01',
                'end_date' => '2022-05-31',
            ]);
        }
    }
}
