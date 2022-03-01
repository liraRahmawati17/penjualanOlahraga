@extends('layouts.admin')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="col-sm-12">
                <div class="card-header">
                    <center>
                        <h3 class="m-0"><b><i>Data Barang</i></b></h3>
                    </center>
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
                        Data Barang
                        <a href="{{ route('barang.create') }}" class="btn btn-sm btn-primary float-right">Tambah
                            Barang</a>
                        <a href="{{ url('/') }}" class="btn btn-sm btn-primary float-right"><i
                                class="fa fa-arrow-left"></i> beranda</a>


                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Supplier</th>
                                        <th>Barang</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>gambar</th>
                                        <th>
                                            <center>Aksi</center>
                                        </th>
                                    </tr>
                                </thead>
                                @php $no=1; @endphp
                                @foreach ($barang as $data)
                                    <tr>
                                        <th>{{ $no++ }}</th>
                                        <th>{{ $data->suplier->nama }}</th>
                                        <th>{{ $data->nama_barang }}</th>
                                        <th>{{ $data->harga }}</th>
                                        <th>{{ $data->stok }}</th>
                                        <th><img src="{{ $data->image() }}" alt="" style="width:100px; height:100px;"
                                                alt="cover"></th>
                                        </td>
                                        <th>
                                            <form action="{{ route('barang.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('barang.edit', $data->id) }}"
                                                    class="btn btn-info">Edit</a>
                                                <a href="{{ route('barang.show', $data->id) }}"
                                                    class="btn btn-warning">Show</a>
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
                                            </form>
                                        </th>
                                        </td>
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
