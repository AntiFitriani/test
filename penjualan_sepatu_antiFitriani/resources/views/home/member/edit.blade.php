@extends('layout.master')
@section('title', 'Halaman Edit Data Member')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="content-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1>Form Edit Data Member</h1>
                        </div>
                        <div class="card-body">
                            <form action="/member/{{$member->id}}/update" method="POST">
                                @csrf
                            <div class="mb-3">
                              <label for="" class="form-label">Nama Member</label>
                              <input type="text" name="nama_member" value="{{$member->nama_member}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Alamat</label>
                                <input type="text" name="alamat" value="{{$member->alamat}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">No Telpon</label>
                                <input type="text" name="no_tlp" value="{{$member->no_tlp}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
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