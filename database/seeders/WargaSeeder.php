<?php

namespace Database\Seeders;

use App\Models\Warga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        warga::insert([
            'nama' => 'Atsiila khairil',
            'jenis_kelamin' => 0,
            'alamat' => 'jl.sampora',
        ]);

        warga::insert([
            'nama' => 'Fikri',
            'jenis_kelamin' => 0,
            'alamat' => 'jl.baru',
        ]);

        warga::insert([
            'nama' => 'rayhan',
            'jenis_kelamin' => 0,
            'alamat' => 'jl.agung',
        ]);

        warga::insert([
            'nama' => 'izzan',
            'jenis_kelamin' => 0,
            'alamat' => 'jl.cihamplas',
        ]);

        warga::insert([
            'nama' => 'restu',
            'jenis_kelamin' => 0,
            'alamat' => '',
        ]);
    }
}
