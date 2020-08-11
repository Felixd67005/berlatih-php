@extends('adminlte.master')

@section('content')
    <div class="ml-3 mt-3">
        <h3>Detail pertanyaan :</h4>
        <h4>ID : {{ $ask->id }}</h4>
        <p>Judul : {{ $ask->judul }}</p>
        <p>Isi : {{ $ask->isi }}</p>
        <p>Tanggal dibuat : {{ $ask->tanggal_dibuat }}</p>
    </div>
@endsection