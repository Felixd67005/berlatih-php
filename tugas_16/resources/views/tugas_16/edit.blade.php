@extends('adminlte.master')

@section('content')
    <div class="ml-3 mt-3">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit pertanyaan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form role="form" action='/pertanyaan/{{ $ask->id }}' method='POST'>
                {{ csrf_field() }}
                {{method_field('PUT')}}
                <div class="card-body">
                    <div class="form-group">
                        <label for="id">ID : </label>
                        <label for="id" name="id">{{  $ask->id }}</label>
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" 
                            value="{{ old('judul', $ask->judul)}}" placeholder="Judul">
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi</label>
                        <input type="text" class="form-control" id="isi" name="isi" 
                        value="{{ old('isi', $ask->isi)}}" placeholder="Isi">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection