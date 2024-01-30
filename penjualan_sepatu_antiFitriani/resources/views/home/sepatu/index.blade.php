@extends('layout.master')
@section('title', 'Halaman Kelola Data Sepatu')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="content-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1>Halaman Kelola Data Sepatu</h1>
                            <a href="/sepatu/tambah" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body" id="example">
                            <div class="table-responsive">
                                <table class="table table-primary">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID Sepatu</th>
                                            <th scope="col">ID Supplier</th>
                                            <th scope="col">Nama Sepatu</th>
                                            <th scope="col">Merk</th>
                                            <th scope="col">Warna</th>
                                            <th scope="col">Stok</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sepatu as $r)
                                        <tr class="">
                                            <td scope="row">{{$r->id}}</td>
                                            <td>{{$r->Supplier->id}}- {{$r->Supplier->nama_supplier}}</td>
                                            <td>{{$r->nama_sepatu}}</td>
                                            <td>{{$r->Stok}}</td>
                                            <td>{{$r->merk}}</td>
                                            <td>{{$r->warna}}</td>
                                            <td>{{$r->stok}}</td>
                                            <td>
                                                <a href="/sepatu/{{$r->id}}/edit" class="btn btn-warning">Edit</a>
                                                <a href="/sepatu/{{$r->id}}/hapus" class="btn btn-danger" onclick="return confirm('YAKIN DATA INGIN DIHAPUS')">Hapus</a>
                                            </td>
                                        @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection