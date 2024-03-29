<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page" style="background-color: mintcream">
<div class="login-box">
  <div class="login-logo">
     
    
  </div>
  <!-- /.login-logo -->
<div class="card card-outline card-primary">
  <div class="card-circle elevation-3">
    <div class="card-body login-card-body">
      <center><img src="{{asset('assets/img/sepatu!.jpg')}}" style="opacity: .8" width="200px"></center>
      <div class="card-header text-center">
        <a href="/login" class="h2"><b>Sepatu</b> BLUESS</a>
      </div>
      <p class="login-box-msg">Input your ID to start your session</p>
      <form action="/hasil">
        @csrf
        <div class="input-group mb-3">
          <input type="text" name="id" required class="form-control" placeholder="Input Your ID Member">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        
        <div class="row">
          <!-- /.col -->
          <div class="col-6">
            <button type="submit" class="btn btn-primary btn-block">Check ID</button>
            <br>
          </div>

          <!-- /.col -->
        </div>
      </form>
    
    </div>
    <!-- /.login-card-body -->
  </div>
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/js/adminlte.min.js')}}"></script>
</body>
</html>