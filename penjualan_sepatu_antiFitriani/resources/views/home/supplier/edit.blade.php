@extends('layout.master')
@section('title', 'Halaman Edit Data Supplier')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="content-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1>Form Edit Data Supplier</h1>
                        </div>
                        <div class="card-body">
                            <form action="/supplier/{{$supplier->id}}/update" method="POST">
                             @csrf
                            <div class="mb-3">
                              <label for="" class="form-label">Nama Supplier</label>
                              <input type="text" name="nama_supplier" required value="{{$supplier->nama_supplier}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Nama Perusahaan</label>
                                <input type="text" name="nama_perusahaan" required value="{{$supplier->nama_perusahaan}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Alamat</label>
                                <input type="text" name="alamat" value="{{$supplier->alamat}}" required id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">No Telpon Supplier</label>
                                <input type="number" name="no_tlp_supplier" required value="{{$supplier->no_tlp_supplier}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                             </div>

                             <div class="mb-3">
                                <label for="" class="form-label">No Telpon Perusahaan</label>
                                <input type="number" name="no_tlp_perusahaan" required value="{{$supplier->no_tlp_perusahaan}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
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