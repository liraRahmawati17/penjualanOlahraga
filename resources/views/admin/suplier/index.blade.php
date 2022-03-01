@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="col-sm-12">
            <div class="card-header">
                <center>  <h3 class="m-0"><b><i>Data Suplier</i></b></h3></center>
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
                    Data Supplier
                    <a href="{{route('suplier.create')}}" class="btn btn-sm btn-primary float-right">Tambah Supplier</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama Supplier</th>
                            <th>Alamat</th>
                            <th><center>Aksi</center></th>
                        </tr>
                    </thead>
                            @php $no=1; @endphp
                            @foreach($suplier as $data)
                            <tr>
                               <th>{{$no++}}</th>
                               <th>{{$data->nama}}</th>
                               <th>{{$data->alamat}}</th>
                               <th>
                                    <form action="{{route('suplier.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('suplier.edit',$data->id)}}" class="btn btn-info">Edit</a>
                                        <a href="{{route('suplier.show',$data->id)}}" class="btn btn-warning">Show</a>
                                        <button type="submit" class="btn btn-danger delete-confirm">Delete</button>
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
