@extends('layout.master')
@section('title', 'Halaman Kelola Data Supplier')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="content-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1>Halaman Kelola Data Supplier</h1>
                            <a href="/supplier/tambah" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body" id="example">
                            <div class="table-responsive">
                                <table class="table table-primary">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID Supplier</th>
                                            <th scope="col">Nama Supplier</th>
                                            <th scope="col">Nama Perusahaan</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">No Telpon Supplier</th>
                                            <th scope="col">No Telpon Perusahaan</th>
                                            <th scope="col">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($supplier as $s)
                                        <tr class="">
                                            <td scope="row">{{$s->id}}</td>
                                            <td>{{$s->nama_supplier}}</td>
                                            <td>{{$s->nama_perusahaan}}</td>
                                            <td>{{$s->alamat}}</td>
                                            <td>{{$s->no_tlp_supplier}}</td>
                                            <td>{{$s->no_tlp_perusahaan}}</td>
                                            <td>
                                                <a href="/supplier/{{$s->id}}/edit" class="btn btn-warning">Edit</a>
                                                <a href="/supplier/{{$s->id}}/hapus" class="btn btn-danger" onclick="return confirm('YAKIN DATA INGIN DIHAPUS')">Hapus</a>
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