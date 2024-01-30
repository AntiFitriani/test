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
                            <h1>Form Tambah Data Kasir</h1>
                        </div>
                        <div class="card-body">
                            <form action="/user/simpan" method="POST">
                                @csrf
                            <div class="mb-3">
                              <label for="" class="form-label">Username</label>
                              <input type="text" required name="username"  id="" class="form-control" placeholder="">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Password</label>
                                <input type="text" required name="password"  id="" class="form-control" placeholder="" >
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Nama Kasir</label>
                                <input type="text" required name="nama_kasir" id="" class="form-control" placeholder="" >
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Level</label>
                                <select name="level" id="" class="form-control">
                                    <option value="Admin">Admin</option>
                                    <option value="Kasir">Kasir</option>
                                </select>
                            </div>
                            
                              <button type="submit" class="btn btn-primary">Simpan</button>
                              <button type="reset" class="btn btn-secondary">Reset</button>

                            </form>

                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection