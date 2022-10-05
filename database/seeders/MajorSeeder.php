<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // menghapus semua data di database
        Major::truncate();
        $majors=["ASE","DBM","CDM","OAA"];
        foreach( $majors as $key => $major){
            Major::create([
                "name" => $major,
                "description" => "Ini jurusan $major",
            ]);
        }

        // Major::create([
        //     "name" => "Sastra",
        //     "description" => "Buat Buku"
        // ]);
    }
}
