<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SM System | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>dist/css/AdminLTE.css">
  <!-- Material Design -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>dist/css/bootstrap-material-design.min.css">
  <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>dist/css/ripples.min.css">
  <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>dist/css/MaterialAdminLTE.min.css">
  
  
  <!-- iCheck -->
  <!-- <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>plugins/iCheck/square/blue.css"> -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="<?php echo base_url().'assets/'; ?>https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="<?php echo base_url().'assets/'; ?>https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>https://fonts.googleapis.com/css?family=Open+Sans:300" type="text/css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
  

  <!-- Google Font -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body>
    <div class="login-logo ">
    <img class="logo" src="<?php echo base_url();?>assets/kplogo.png"/>
		<div class="font animate-zoom" >
			<span><b>IFVP</b><span>
		</div>
	
		<!--<div class="w3-container ">
		   <p class="w3-jumbo w3-tangerine">Scientific Wing Initiative</p>
		</div>-->
		
		<div>
		   <p class="font2 w3-xxxlarge w3-tangerine">Scientific Wing Initiative</p>
		</div>
  </div>
<div class="box2 animate fadeIn one">
  
  <!-- /.login-logo -->
  <div class="login-box-body">
    

    <form action="<?php echo base_url('Login/checklogin'); ?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" id="username" name="username" >
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" id="password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-7">
          <div class="checkbox">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-5">
          <button type="submit" class="btn btn-primary btn-raised btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="<?php echo base_url().'assets/'; ?>#">I forgot my password</a><br>
    <a href="<?php echo base_url().'assets/'; ?>register.html" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url().'assets/'; ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url().'assets/'; ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Material Design -->
<script src="<?php echo base_url().'assets/'; ?>dist/js/material.min.js"></script>
<script src="<?php echo base_url().'assets/'; ?>dist/js/ripples.min.js"></script>
<script>
    $.material.init();
</script>
<!-- iCheck -->
<!-- <script src="<?php echo base_url().'assets/'; ?>../../plugins/iCheck/icheck.min.js"></script> 
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });-->
</script>
</body>
</html>
