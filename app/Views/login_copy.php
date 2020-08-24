<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SPB-PolibatamPress | Log in</title>
  <!-- Favicon -->
  <link rel='shortcut icon' href='img/favicon/logopolibatampress.jpg' type='image/x-icon' />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.css') ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('font-awesome/css/font-awesome.min.css') ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('Ionicons/css/ionicons.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">



  <script src="bower_components/jquery/dist/jquery.min.js"></script>

  <link rel="stylesheet" href="<?php echo base_url('dist/css/app.css') ?>">
  <script src="<?php echo base_url('dist/js/sweetalert.min.js') ?>"></script>

  <style>
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      margin: 0;
    }

    .login-page,
    .register-page {
      background: #fff
    }
  </style>

  <script src="dist/js/angular.min.js"></script>


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <!--<img src="img/logo2.png" height="60%" width="180" class="rounded" alt="..."><br>-->
      <a href=""><b>SPB-</b>PolibatamPress</a>
      <h5>Sistem Penerbitan Buku</h5>
      <h5><b>Polibatam Press</b></h5>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <form action="home/login" method="post">
        <div class="form-group has-feedback">
          <input type="text" name="email" id="email" class="form-control" placeholder="E-Mail" autocomplete="off" required="">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="login" value="Login" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Loading">Login</button>
        </div>

        <script type="text/javascript">
          $('.btn').on('click', function() {
            var $this = $(this);
            $this.button('loading');
            setTimeout(function() {
              $this.button('reset');
            }, 3000);
          });
        </script>

      </form>


      <a href="index.php?page=lupa_password" class="text-center">Lupa Kata Sandi ?</a>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
      </div>

      <div class="social-auth-links text-center">
        <a href="index.php?page=login_lainnya" class="btn  btn-block btn-social btn-twitter btn-flat"><i class="glyphicon glyphicon-user"></i>Login Perangkat SPB</a>
      </div>
      <div class="social-auth-links text-center">
        <a href="<?=  base_url('home/register') ?>" class="btn  btn-block btn-social btn-facebook btn-flat"><i class="glyphicon glyphicon-user"></i>Register</a>
      </div>
    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->



  <!-- jQuery 3 -->

  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js') ?>"></script>
  <!-- iCheck -->
  <script src="<?php echo base_url('iCheck/icheck.min.js') ?>"></script>
  <script>
    $(function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
      });
    });
  </script>


</body>


</html>