<?php

namespace Database\Seeders;

use Database\Seeders\HealthDeclaration\DataSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([DataSeeder::class]);
    }

}
