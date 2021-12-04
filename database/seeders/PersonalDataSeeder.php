<?php

namespace Database\Seeders;

use App\Models\PersonalData;
use Illuminate\Database\Seeder;

class PersonalDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PersonalData::factory(20)->create();
    }
}
