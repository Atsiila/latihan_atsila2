@php
    $siswa = \App\Models\Siswa::all();
        // menampilkan 1 siswa Awall
    $satusiswaAwal = \App\Models\Siswa::first();
        // menampilkan 1 siswa Akhir
    $satusiswaAkhir = \App\Models\Siswa::latest('id')->first();
        // menampilkan 1 siswa yang di pilih
    $siswasatu = \App\Models\Siswa::find(11);
    $siswalaki = \App\Models\Siswa::where('jenis_kelamin', 0)->get();

@endphp


        {{-- Menampilkan data --}}

<h1 style="color: red">menampilkan banyak data</h1>
@foreach ($siswa as $data)
Nama Siswa : {{ $data->nama }} <br>
Jenis Kelamin  : {{ $data->jenis_kelamin }} <br>
Umur  : {{ $data->umur }} <br>
Alamat  : {{ $data->alamat }} <br>
<hr>
@endforeach


        {{-- menampilkan 1 siswa Awal --}}
<h1 style="color: yellow">menampilkan 1 siswa Awal</h1>
Nama Siswa : {{ $satusiswaAwal->nama }} <br>
Jenis Kelamin  : {{ $satusiswaAwal->jenis_kelamin }} <br>
Umur  : {{ $satusiswaAwal->umur }} <br>
Alamat  : {{ $satusiswaAwal->alamat }} <br>
<hr>

        {{-- Menampilkan 1 siswa akhir --}}
<h1 style="color: rgb(0, 255, 21)">menampilkan 1 siswa Akhir</h1>

Nama Siswa : {{ $satusiswaAkhir->nama }} <br>
Jenis Kelamin  : {{ $satusiswaAkhir->jenis_kelamin }} <br>
Umur  : {{ $satusiswaAkhir->umur }} <br>
Alamat  : {{ $satusiswaAkhir->alamat }} <br>
<hr>


        {{-- Menampilkan 1 siswa yang di pilih  --}}
<h1 style="color: blue">menampilkan hanya 1 siswa yamg di pilih  </h1>
        {{-- Menambahkan operator OR apabila tidak ditemukan --}}
Nama Siswa : {{ $siswasatu->nama ?? 'tidak ditemukan' }} <br>
Jenis Kelamin  : {{ $siswasatu->jenis_kelamin ?? 'tidak ditemukan' }} <br>
Umur  : {{ $siswasatu->umur ?? 'tidak ditemukan' }} <br>
Alamat  : {{ $siswasatu->alamat ?? 'tidak ditemukan' }} <br>
<hr>


<h1 style="color: rgb(89, 0, 116)">menamppilkan data yang di pilih</h1>
@foreach ($siswalaki as $datalaki)
Nama Siswa : {{ $data->nama }} <br>
Jenis Kelamin  : {{ $data->jenis_kelamin }} <br>
Umur  : {{ $data->umur }} <br>
Alamat  : {{ $data->alamat }} <br>
<hr>
@endforeach
