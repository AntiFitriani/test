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
                            <h1>Form Edit Data Kasir</h1>
                        </div>
                        <div class="card-body">
                            <form action="/user/{{$user->id}}/update" method="POST">
                            @csrf
                            <div class="mb-3">
                              <label for="" class="form-label">Username</label>
                              <input type="text" name="username" required value="{{$user->username}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Password</label>
                                <input type="text" name="password" required value="{{$user->password}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Nama Kasir</label>
                                <input type="text" name="nama_kasir" required value="{{$user->nama_kasir}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
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