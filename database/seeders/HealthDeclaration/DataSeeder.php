<?php

namespace Database\Seeders\HealthDeclaration;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ini_set('max_memory_limit', -1);
        ini_set('max_execution_time', -1);
        $dataInsertInfo = [];
        $records        = DB::table('health_students_info_bmi')->get();
        if (count($records) == 0) {
            for ($gender = 1; $gender <= 2; $gender++) {
                for ($mont = 61; $mont <= 228; $mont++) {
                    $dataInsertInfo[] = [
                        'gender'     => $gender,
                        'month'      => $mont,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ];
                }
            }
            DB::table('health_students_info_bmi')->insert($dataInsertInfo);
        }
        if (count(DB::table('health_bmi')) == 0) {
            $jsonDataMale = file_get_contents("database/seeders/HealthDeclaration/jsonformatter_female.txt");
            $dataMale     = collect(json_decode($jsonDataMale, true))->first();
            $types        = [
                '-3 SD'  => 1,
                '-2 SD'  => 2,
                '-1 SD'  => 3,
                'Median' => 4,
                '1 SD'   => 5,
                '2 SD'   => 6,
                '3 SD'   => 7,
            ];
            foreach ($dataMale as $index => $item) {
                $index    = 168 + $index;
                $fields   = array_keys($item);
                $keyItems = [];
                foreach ($fields as $key => $field) {
                    if (isset($types[$field])) {
                        $keyItems[] = [
                            'student_info_id' => $index + 1,
                            'type_id'         => $types[$field],
                            'value'           => $item[$field],
                            'created_at'      => Carbon::now(),
                            'updated_at'      => Carbon::now(),
                        ];
                    }
                }
                DB::table('health_bmi')->insert($keyItems);
            }
        }
    }

}
