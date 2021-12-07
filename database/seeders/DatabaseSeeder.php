<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()

    {
        // $this->call(UserSeeder::class);
        $this->call(ControlSeeder::class);
        $this->call(TrainingProgramSeeder::class);
        $this->call(DoctorSeeder::class);
        $this->call(AttendantSeeder::class);
        // $this->call(DiagnosticSeeder::class);
        $this->call(DiseaseSeeder::class);
        $this->call(PersonalDataSeeder::class);

    }
}
