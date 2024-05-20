<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// import Models
use App\Models\Dosen;
use App\Models\Hobi;
use App\Models\Mahasiswa;
use App\Models\Wali;
use DB;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->delete();
        DB::table('Walis')->delete();
        DB::table('dosens')->delete();
        // sampel data dosen di sini
        $dosen = Dosen::create([
            'nama' => 'Yulianto',
            'nipd' => '123456789',
        ]);

        // sampel data mahasiswa di sini

        $novay = Mahasiswa::create(array(
            'nama' => 'Noviyanto Rachmadi',
            'nim' => '1015015072',
            'id_dosen' => $dosen->id,
        ));


            // Mahasiswa Kedua bernama Djaffar. Dengan NIM 1015015088.
        $dije = Mahasiswa::create(array(
            'nama' => 'Djaffar',
            'nim' => '1015015088',
            'id_dosen' => $dosen->id,
        ));

            // Mahasiswa Ketiga bernama Puji Rahayu. Dengan NIM 1015015078.
        $ayu = Mahasiswa::create(array(
            'nama' => 'Puji Rahayu',
            'nim' => '1015015078',
            'id_dosen' => $dosen->id,
        ));

            $this->command->info('mahasiswa telah diisi');

        // sampel data Wali di sini

            #ciptakan wali si novay.
            Wali::create(array(
                'nama' => 'Achmad S',
                'id_mahasiswa' => $novay->id,
            ));


            Wali::create(array(
                'nama' => 'Entahlah',
                'id_mahasiswa' => $dije->id,
            ));


            Wali::create(array(
                'nama' => 'Arianto',
                'id_mahasiswa' => $ayu->id,
            ));

            $this->command->info('Data Mahasiswa dan Wali telah diisi');

            #SIAPKAN SEEDER HOBI DISINI
        DB::table('hobis')->delete();
        DB::table('mahasiswa_hobi')->delete();

        # Isi tabel hobi
        $mandi_hujan = Hobi::create(array('hobi' => 'Mandi Hujan'));
        $baca_buku = Hobi::create(array('hobi' => 'Baca Buku'));

        # Hubungkan Mahasiswa dengan Hobinya masing-masing
        $novay->hobi()->attach($mandi_hujan->id);
        $novay->hobi()->attach($baca_buku->id);
        $dije->hobi()->attach($mandi_hujan->id);
        $ayu->hobi()->attach($baca_buku->id);


    }
}
