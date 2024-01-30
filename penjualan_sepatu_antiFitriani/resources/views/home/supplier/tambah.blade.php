@extends('layout.master')
@section('title', 'Halaman Tambah Data Suplier')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="content-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1>Form Tambah Data Supplier</h1>
                        </div>
                        <div class="card-body">
                            <form action="/supplier/simpan" method="POST">
                            @csrf
                            <div class="mb-3">
                              <label for="" class="form-label">Nama Supplier</label>
                              <input type="text" name="nama_supplier" required id="" class="form-control" placeholder="">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Nama Perusahaan</label>
                                <input type="text" name="nama_perusahaan" required id="" class="form-control" placeholder="">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Alamat</label>
                                <input type="text" name="alamat" required id="" class="form-control" placeholder="">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">No Telpon Supplier</label>
                                <input type="number" name="no_tlp_supplier" required id="" class="form-control" placeholder="" aria-describedby="helpId">
                             </div>

                             <div class="mb-3">
                                <label for="" class="form-label">No Telpon Perusahaan</label>
                                <input type="number" name="no_tlp_perusahaan"  required id="" class="form-control" placeholder="" aria-describedby="helpId">
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