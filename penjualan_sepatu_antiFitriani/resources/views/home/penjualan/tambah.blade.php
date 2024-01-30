@extends('layout.master')
@section('title', 'Halaman Tambah Data Penjualan')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="content-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1>Form Tambah Data Penjualan</h1>
                        </div>
                        <div class="card-body">
                            <form action="/penjualan/simpan" method="POST">
                             @csrf
                            <div class="mb-3">
                              <label for="" class="form-label">Id Kasir</label>
                              <select name="id_kasir" id="" class="form-control" required>
                                <option value="" disabled>---Pilih Id Kasir---</option>
                                @foreach ($user as $u)
                                <option value="{{$u->id}}">{{$u->nama_kasir}}</option>
                                @endforeach
                              </select>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Id Member</label>
                                <select name="id_member" id="" class="form-control" required>
                                    <option value="" disabled>---Pilih Id Member---</option>
                                    @foreach ($member as $m)
                                    <option value="{{$m->id}}">{{$m->nama_member}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Id Sepatu</label>
                                <select name="id_sepatu" id="" class="form-control">
                                    <option value="" disabled>---Pilih Id Sepatu---</option>
                                    @foreach ($sepatu as $s)
                                    <option value="{{$s->id}}">{{$s->nama_sepatu}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Tanggal Bayar</label>
                                <input type="date" name="tgl_bayar" id=""  required class="form-control" placeholder="" aria-describedby="helpId">
                             </div>

                             <div class="mb-3">
                                <label for="" class="form-label">Jumlah Bayar</label>
                                <input type="number" name="jumlah_bayar" required id="" class="form-control" placeholder="" aria-describedby="helpId">
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