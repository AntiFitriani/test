@extends('layout.master')
@section('title', 'Halaman Kelola Data Member')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="content-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1>Halaman Kelola Data Member</h1>
                            <br>
                            <a href="/member/tambah" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-primary" id="example">
                                    <thead>
                                        <tr>

                                            <th scope="col">ID Member</th>
                                            <th scope="col">Nama Member</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">No Telpon</th>
                                            <th scope="col">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($member as $e)
                                        <tr class="">
                                            <td scope="row">{{$e->id}}</td>
                                            <td>{{$e->nama_member}}</td>
                                            <td>{{$e->alamat}}</td>
                                            <td>{{$e->no_tlp}}</td>
                                            <td>
                                                <a href="/member/{{$e->id}}/edit" class="btn btn-warning">Edit</a>
                                                <a href="/member/{{$e->id}}/hapus" class="btn btn-danger" onclick="return confirm('YAKIN DATA INGIN DIHAPUS')">Hapus</a>
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