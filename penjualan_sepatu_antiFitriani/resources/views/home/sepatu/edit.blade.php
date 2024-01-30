@extends('layout.master')
@section('title', 'Halaman Edit Data Sepatu')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="content-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1>Form Edit Data sepatu</h1>
                        </div>
                        <div class="card-body">
                            <form action="/sepatu/{{$sepatu->id}}/update" method="POST">
                                @csrf
                            <div class="mb-3">

                              <label form="" class="form-label">Id Supplier</label>
                              <select name="id_supplier" id="" class="form-control" required>
                                <option value="" disabled>---Pilih Id User---</option>
                                @foreach ($supplier as $s)
                                <option value="{{$s->id}}">{{$s->nama_supplier}}</option>
                                @endforeach
                              </select>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Nama Sepatu</label>
                                <input type="text" name="nama_sepatu" required value="{{$sepatu->nama_sepatu}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Merk</label>
                                <input type="text" name="merk" required ="{{$sepatu->merk}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Warna</label>
                                <input type="text" name="warna" required value="{{$sepatu->warna}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                             </div>

                             <div class="mb-3">
                                <label for="" class="form-label">Stok</label>
                                <input type="number" name="stok" required value="{{$sepatu->stok}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
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