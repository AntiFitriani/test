<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets/css/adminlte.min.css')}}">
    <title>Document</title>
</head>
<body style="background-color: mintcream" class="hold-transition login-page" topmargin="50" >
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card" style="margin: top 40px;">
                    <div class="card-header">
                        <center><h2>History Member</h2></center>
                    </div>
                    <div class="card-body">
                    <table class="table table-info">
                        <thead>
                            <tr>
                                <th scope="col">Id Penjualan</th>
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
                    <div >
                        <br>
                            <a href="/login" class="btn btn-warning">Back</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- jQuery -->
    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('assets/js/adminlte.min.js')}}"></script>
</body>
</html>