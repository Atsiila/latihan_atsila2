@php
        $warga = \App\Models\Warga::all();
@endphp


<h1 style="color:blue">WARGA</h1>
@foreach ($warga as $data)
    Id warga : {{ $data->id }}<br>
    Nama warga : {{ $data->nama }}<br>
    Nik : {{ $data->Ktp->nik }} <br>
    jenis kelamin : {{ $data->jenis_kelamin}}<br>
    Alamat : {{ $data->alamat }}
    <hr>
@endforeach
