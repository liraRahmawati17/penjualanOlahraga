@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <center><h3 class="m-0"><b>Data Pelanggan</b></h3></center>
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
                <div class="card-header">Data Pelanggan</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for=""> Nama Pelanggan</label>
                        <input type="text" name="nama" value="{{$pelanggan->nama}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> Jenis Kelamin</label>
                        <input type="text" name="jk" value="{{$pelanggan->jk}}" class="form-control" readonly>
                    </div>
                     <div class="form-group">
                        <label for=""> Alamat</label>
                        <input type="text" name="alamat" value="{{$pelanggan->alamat}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> Email </label>
                        <input type="text" name="email" value="{{$pelanggan->email}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{url('admin/pelanggan')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
