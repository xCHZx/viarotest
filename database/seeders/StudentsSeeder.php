<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            // 'id' => 1,
            'name' => 'John',
            'lastname' => 'Doe',
            'gender' => 'Masculino',
            'birthdate' => '1994-07-20',
        ]);
    }
}
