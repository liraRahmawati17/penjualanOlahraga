@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
               <center><h3 class="m-0"><b>Detail Penjualan</b> </h3></center>
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
                    Detail Penjualan
                    <a href="{{route('detailpenjualan.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Data</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <td><th>Nomor</th></td>
                                <td><th>Nama Pelanggan</th></td>
                                <td><th>Nama Barang</th></td>
                                <td><th>Qty</th></td>
                                <td><th>Harga</th></td>
                                <td><th>Total Harga</th></td>
                                <td><th>Thumbnail</th></td>
                                <td><th><center>Aksi</center></th></td>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($detailpenjualan as $data)
                            <tr>
                                <td> <th>{{$no++}}</th></td>
                                <td> <th>{{$data->pelanggan->nama}}</th></td>
                                <td> <th>{{$data->barang->nama_barang}}</th></td>
                                <td> <th>{{$data->qty}}</th></td>
                                <td> <th>{{$data->harga}}</th></td>
                                <td> <th>{{$data->total}}</th></td>
                                <td> <th><img src="{{$data->image()}}" alt="" style="width:150px; height:150px;" alt="cover"></th></td>
                                <td><th>
                                    <form action="{{route('detailpenjualan.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('detailpenjualan.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{route('detailpenjualan.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
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
