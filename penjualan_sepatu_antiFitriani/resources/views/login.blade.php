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
        <a href="../../index2.html" class="h2"><b>Sepatu</b> BLUESS</a>
      </div>
      <p class="login-box-msg">Login to start your session</p>
      <form action="/postLogin" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" name="username" required class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" required class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <a href="/history"><u><i>Check As Member!</i></u></a>
          </div>
          <!-- /.col -->
          <div class="col-6">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
            <br>
          </div>
          <div class="icheck-primary">
            <input type="checkbox" id="remember">
            <label for="remember">
              Remember Me
            </label>
          </div>

          <!-- /.col -->
        </div>
      </form>
      <br>
    @if (session('error'))
      <div class="alert alert-danger">
        {{session('error')}}
      </div>
    @endif
    
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
