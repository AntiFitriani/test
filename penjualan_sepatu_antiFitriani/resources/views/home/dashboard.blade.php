@extends('layout.master')
@section('title', 'Dashboard')
@section('content')

<div class="content-wrapper" style="background-color: mintcream" >
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$jumlah_member}}</h3>

                <p><b>jumlah Member</b></p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/member" class="small-box-footer"><i>More info </i><i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$jumlah_sepatu}}</h3>

                <p><b>Jumlah Stok Sepatu</b></p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/sepatu" class="small-box-footer"><i>More info </i><i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$jumlah_user}}</h3>

                <p><b>Jumlah User</b></p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/user" class="small-box-footer"><i>More info</i> <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>
                  @if ($total_minggu->total_price == null)
                      0
                  @else 
                  <td>Rp.{{number_format($total_minggu->total_price),2,',','.'}}</td>
                  
                  @endif
                </h3>

                <p><b>Total Penjualan Minggu Ini</b></p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="/penjualan" class="small-box-footer"><i>More info </i><i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
          </div>
          <!-- ./col -->
        </div>
    </section>


    <section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>History Penjualan Sepatu <b>BLUEES</b></h3>
                </div>
                <div class="card-body">
                  <table id="example" class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Kasir</th>
                            <th scope="col">Member</th>
                            <th scope="col">Sepatu</th>
                            <th scope="col">Tanggal Bayar</th>
                            <th scope="col">Jumlah Bayar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penjualan as $p)
                        <tr class="">
                          <td scope="row">{{$p->id}}</td>
                          <td>{{$p->User->id}}- {{$p->User->nama_kasir}}</td>
                          <td>{{$p->Member->id}}- {{$p->Member->nama_member}}</td>
                          <td>{{$p->Sepatu->id}}- {{$p->Sepatu->nama_sepatu}}</td>
                          <td>{{$p->tgl_bayar}}</td>
                            <td>Rp.{{number_format($p->jumlah_bayar),2,',','.'}}</td>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    </section>
  </div>
  @endsection