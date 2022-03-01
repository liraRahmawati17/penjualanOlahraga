@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="col-sm-12">
            <div class="card-header">
                <center>  <h3 class="m-0"><b><i>Data Pelanggan</i></b></h3></center>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Pelanggan
                    <a href="{{route('pelanggan.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Pelanggan</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Nama Pelanggan</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th><center>Aksi</center></th>
                            </tr>
                        </thead>
                            @php $no=1; @endphp
                            @foreach($pelanggan as $data)
                            <tr>
                                <th>{{$no++}}</th>
                                <th>{{$data->nama}}</th>
                                <th>{{$data->jk}}</th>
                                <th>{{$data->alamat}}</th>
                                <th>{{$data->email}}</th>
                                <th>
                                    <form action="{{route('pelanggan.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('pelanggan.edit',$data->id)}}" class="btn btn-info">Edit</a>
                                        <a href="{{route('pelanggan.show',$data->id)}}" class="btn btn-warning">Show</a>
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
                                    </form>
                                </th>

                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
