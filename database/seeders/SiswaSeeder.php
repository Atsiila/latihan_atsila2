<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // use App\Models\Siswa;
        Siswa::insert([
            'nama' => "Atsiila Khairil",
            'jenis_kelamin' => 0,
            'umur' => 17,
            'alamat' => "smk Assalaam",

        ]);

        Siswa::insert([
            'nama' => "fikri",
            'jenis_kelamin' => 0,
            'umur' => 18,
            'alamat' => "smk Assalaam",

        ]);


        Siswa::insert([
            'nama' => "nadhif",
            'jenis_kelamin' => 0,
            'umur' => 17,
            'alamat' => "smk Assalaam",

        ]);

        Siswa::insert([
            'nama' => "rizki",
            'jenis_kelamin' => 0,
            'umur' => 17,
            'alamat' => "smk Assalaam",

        ]);

        Siswa::insert([
            'nama' => "andini",
            'jenis_kelamin' => 1,
            'umur' => 17,
            'alamat' => "smk Assalaam",

        ]);

        Siswa::insert([
            'nama' => "firr",
            'jenis_kelamin' => 1,
            'umur' => 18,
            'alamat' => "smk Assalaam",

        ]);

        Siswa::insert([
            'nama' => "restu",
            'jenis_kelamin' => 0,
            'umur' => 16,
            'alamat' => "smk Assalaam",

        ]);


        Siswa::insert([
            'nama' => "didil",
            'jenis_kelamin' => 0,
            'umur' => 17,
            'alamat' => "smk Assalaam",

        ]);


        Siswa::insert([
            'nama' => "izzan",
            'jenis_kelamin' => 0,
            'umur' => 17,
            'alamat' => "smk Assalaam",

        ]);

        Siswa::insert([
            'nama' => "farel",
            'jenis_kelamin' => 0,
            'umur' => 17,
            'alamat' => "smk Assalaam",

        ]);

    }
}
