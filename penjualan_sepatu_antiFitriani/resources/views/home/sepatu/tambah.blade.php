@extends('layout.master')
@section('title', 'Halaman Tambah Data Sepatu')
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
                            <form action="/sepatu/simpan" method="POST">
                                @csrf
                            <div class="mb-3">
                              <label for="" class="form-label">Id Supplier</label>
                              <select name="id_supplier" id="" class="form-control" required>
                                <option value="" disabled>---Pilih Id Supplier---</option>
                                @foreach ($supplier as $s)
                                <option value="{{$s->id}}">{{$s->nama_supplier}}</option>
                                @endforeach
                              </select>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Nama Sepatu</label>
                                <input type="text" name="nama_sepatu" required id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>


                            <div class="mb-3">
                                <label for="" class="form-label">Merk</label>
                                <input type="text" name="merk"  id="" required class="form-control" placeholder="" aria-describedby="helpId">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Warna</label>
                                <input type="text" name="warna"   required ="" class="form-control" placeholder="" aria-describedby="helpId">
                             </div>

                             <div class="mb-3">
                                <label for="" class="form-label">Stok</label>
                                <input type="number" name="stok" required id="" class="form-control" placeholder="" aria-describedby="helpId">
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