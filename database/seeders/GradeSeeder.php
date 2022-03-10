<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grades = [
            ['educational_stages' => EDUCATIONAL_STAGES_PRIMARY_SCHOOL,'code' => 1, 'name' => 'Khối 1', 'index_order' => 1],
            ['educational_stages' => EDUCATIONAL_STAGES_PRIMARY_SCHOOL,'code' => 2, 'name' => 'Khối 2', 'index_order' => 2],
            ['educational_stages' => EDUCATIONAL_STAGES_PRIMARY_SCHOOL,'code' => 3, 'name' => 'Khối 3', 'index_order' => 3],
            ['educational_stages' => EDUCATIONAL_STAGES_PRIMARY_SCHOOL,'code' => 4, 'name' => 'Khối 4', 'index_order' => 4],
            ['educational_stages' => EDUCATIONAL_STAGES_PRIMARY_SCHOOL,'code' => 5, 'name' => 'Khối 5', 'index_order' => 5],
            ['educational_stages' => EDUCATIONAL_STAGES_SECONDARY_SCHOOL,'code' => 6, 'name' => 'Khối 6', 'index_order' => 6],
            ['educational_stages' => EDUCATIONAL_STAGES_SECONDARY_SCHOOL,'code' => 7, 'name' => 'Khối 7', 'index_order' => 7],
            ['educational_stages' => EDUCATIONAL_STAGES_SECONDARY_SCHOOL,'code' => 8, 'name' => 'Khối 8', 'index_order' => 8],
            ['educational_stages' => EDUCATIONAL_STAGES_SECONDARY_SCHOOL,'code' => 9, 'name' => 'Khối 9', 'index_order' => 9],
            ['educational_stages' => EDUCATIONAL_STAGES_HIGH_SCHOOL,'code' => 10, 'name' => 'Khối 10', 'index_order' => 10],
            ['educational_stages' => EDUCATIONAL_STAGES_HIGH_SCHOOL,'code' => 11, 'name' => 'Khối 11', 'index_order' => 11],
            ['educational_stages' => EDUCATIONAL_STAGES_HIGH_SCHOOL,'code' => 12, 'name' => 'Khối 12', 'index_order' => 12],
        ];
        $db_grades = DB::table('grades')->get();
        if(empty($db_grades) || count($db_grades) == 0) {
            DB::table('grades')->insert($grades);
        }
    }
}
