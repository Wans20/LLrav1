<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Major;
use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            // menghapus semua data di database
            Student::truncate();
            // local factory in indonesia
            $faker = Factory::create('id_ID');
            // panggil semua jurusan
            $majors = Major::get();
            for ($i=0; $i < 100; $i++){
                $gender = ($i % 2)?"Male":"Female";
                Student::create([
                    'name' => $faker->name($gender),
                    'date_birth' => "1945-07-17",
                    'gender' => "Male",
                    'address' => $faker->address,
                    'major_id' => $majors->random()->id
                ]);
            }
        //    Student::create([
        //     "name" => "Adit",
        //     "date_birth" => "1927-07-01",
        //     "gender" => "Male",
        //     "address" => "Jl.Maju Mundur",
        //     "major_id" => 1
        //    ]);
        
    }
}
