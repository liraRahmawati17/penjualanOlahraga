@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-">Edit Data Penjualan</h1>
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
                <div class="card-header">Data Penjualan</div>
                <div class="card-body">
                    <form action="{{route('penjualan.update',$penjualan->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for=""> Nama Barang</label>
                            <select name="barang_id" class="form-control @error('barang_id') is-invalid @enderror">
                                @foreach ($barang as $data)
                                   <option value="{{$data->id}}" {{$data->id == $penjualan->barang_id ? 'selected="selected"' : '' }}>{{$data->nama_barang}}></option>
                                @endforeach
                            </select>
                            @error('barang_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for=""> Nama Pelanggan</label>
                            <select name="pelanggan_id" class="form-control @error('pelanggan_id') is-invalid @enderror">
                                @foreach ($pelanggan as $data)
                                   <option value="{{$data->id}}" {{$data->id == $penjualan->pelanggan_id ? 'selected="selected"' : '' }}>{{$data->nama}}></option>
                                @endforeach
                            </select>
                            @error('pelanggan_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Thumbnail</label>
                            <br>
                            <img src="{{ $penjualan->image() }}" height="75" style="padding:10px;" />
                            <input type="file" name="cover" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                            <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
