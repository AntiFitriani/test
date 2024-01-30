@extends('layout.master')
@section('title', 'Halaman Tambah Data Member')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="content-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1>Form Tambah Data sepatu</h1>
                        </div>
                        <div class="card-body">
                            <form action="/member/simpan" method="POST">
                                @csrf
                            <div class="mb-3">
                              <label for="" class="form-label">Nama Member</label>
                              <input type="text" name="nama_member" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Alamat</label>
                                <input type="text" name="alamat"  id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">No Telpon</label>
                                <input type="text" name="no_tlp"  id="" class="form-control" placeholder="" aria-describedby="helpId">
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