@extends('layout.master')
@section('title', 'Dashboard')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="content-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1>Halaman Kelola Data Kasir</h1>
                            <a href="/user/tambah" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body" id="example">
                            <div class="table-responsive">
                                <table class="table table-primary">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID Kasir</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">Nama Kasir</th>
                                            <th scope="col">Level</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user as $u)
                                        <tr class="">
                                            <td scope="row">{{$u->id}}</td>
                                            <td>{{$u->username}}</td>
                                            <td>{{$u->nama_kasir}}</td>
                                            <td>{{$u->level}}</td>
                                            <td>
                                                <a href="/user/{{$u->id}}/edit" class="btn btn-warning">Edit</a>
                                                <a href="/user/{{$u->id}}/hapus" class="btn btn-danger" onclick="return confirm('YAKIN DATA INGIN DIHAPUS')">Hapus</a>
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