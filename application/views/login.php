<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.min.css">
			<link rel="shortcut icon" type="image/png" href="images/favicon.jpg"/>
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
		<script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script> 
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">-->

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	<br>
		<h2 class="text-center">PERPUSTAKAAN ONLINE</h2>
		<h2 class="text-center">LOGIN</h2>


	<div class="col-xs-15 col-sm-15 col-md-15 col-lg-15">
		<div class="row">
  			<div class="col-md-4 col-md-offset-4">

  				<?php echo form_open('login/cekLogin'); ?>
				
				<form action="" method="POST" role="form">
				
			
				<?php if (validation_errors()==true) {?>
				<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<?php echo validation_errors();?>
				</div>	
				<?php }?>

  				<div class="form-group">
					<label for="">Username</label>
					<input type="text" class="form-control" id="" name="username" placeholder="Insert Name">
				</div>

				<div class="form-group">
					<label for="">Password</label>
					<input type="Password" class="form-control" id="" name="password" placeholder="Insert Password">
				</div>

				<button type="submit" class="btn btn-info">Login</button>

				<a href="<?php echo site_url('register/index/')?>" type="button" class="btn btn-success">Register</a> 
			
			
				</form>

			<?php echo form_close(); ?>
  			</div>
			</div>		
		
			
	</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>

</html>