@extends('adminlte.master')

@section('content')
<div class="mt-3 ml-3">
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Daftar Pertanyaan</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <table class="table table-bordered">
            <thead>                  
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Tgl dibuat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($asks as $key => $ask)
                <tr>
                    <td>{{ $ask->id }}</td>
                    <td>{{ $ask->judul }}</td>
                    <td>{{ $ask->isi }}</td>
                    <td>{{ $ask->tanggal_dibuat }}</td>
                    <td  style="display: flex">
                        <a href="/pertanyaan/{{ $ask->id }}" class="btn btn-info btn-sm"}>Detail</a>
                        <a href="/pertanyaan/{{ $ask->id }}/edit" class="btn btn-default btn-sm"}>Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>s
        </table>
        </div>
        <!-- /.card-body -->
        <!-- <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">«</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">»</a></li>
        </ul>
        </div> -->
    </div>
</div>
@endsection