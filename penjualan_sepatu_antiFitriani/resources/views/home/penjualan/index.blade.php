@extends('layout.master')
@section('title', 'Halaman Data Penjualan')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="content-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1>Halaman Kelola Data Penjualan</h1>
                            <a href="/penjualan/tambah" class="btn btn-primary">Tambah Data</a>
                            <a href="/penjualan/cetak" class="btn btn-info" target="_blank"><span class="fa fa-print"></span>Cetak</a>
                        </div>
                        <div class="card-body" id="example">
                            <div class="table-responsive">
                                <table class="table table-primary" id="example">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID Penjualan</th>
                                            <th scope="col">Kasir</th>
                                            <th scope="col">Member</th>
                                            <th scope="col">Sepatu</th>
                                            <th scope="col">Tanggal Bayar</th>
                                            <th scope="col">Jumlah Bayar</th>
                                            <th scope="col">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($penjualan as $p)
                                        <tr class="">
                                            <td scope="row">{{$p->id}}</td>
                                            <td>{{$p->User->id}}- {{$p->User->nama_kasir}}</td>
                                            <td>{{$p->Member->id}}- {{$p->Member->nama_member}}</td>
                                            <td>{{$p->Sepatu->id}}- {{$p->Sepatu->nama_sepatu}}</td>
                                            <td>{{$p->tgl_bayar}}</td>
                                            <td>Rp.{{number_format($p->jumlah_bayar),2,','.','}}</td>
                                            <td>
                                                <a href="/penjualan/{{$p->id}}/edit" class="btn btn-warning">Edit</a>
                                                <a href="/penjualan/{{$p->id}}/hapus" class="btn btn-danger" onclick="return confirm('YAKIN DATA INGIN DIHAPUS')">Hapus</a>
                                                <a href="/penjualan/{{$p->id}}/struk" class="btn btn-info"><span class="fa fa-print"></span>Struk</a>
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