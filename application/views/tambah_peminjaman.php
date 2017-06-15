<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
  		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css">
  		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/select2.css">


		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<!-- Menu Navigasi -->
	<body>
		<div class="container">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo site_url()?>/home">Perpustakaan</a>
					</div>
			
						
								<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo site_url()?>/home"><i class="glyphicon glyphicon-home"></i> Home</a></li>
				<li class="active"><a href="<?php echo site_url()?>/Buku/daftarBuku"><i class="glyphicon glyphicon-list-alt"></i> Daftar Buku</a></li>
             	<li><a href="<?php echo site_url()?>/home/index1"><i class="glyphicon glyphicon-file"></i> Riwayat Peminjaman</a></li>
              	<li><a href="<?php echo site_url()?>/home/index1"><i class="glyphicon glyphicon-user"></i> Profile</a></li>
				<form class="navbar-form navbar-left" role="search">
              		<div class="form-group">
                		<input type="text" class="form-control" placeholder="Search">
              		</div>
              		<button type="submit" class="btn btn-default">Submit</button>
            	</form>
            	<li class="dropdown">
                	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <b class="caret"></b></a>
           			<ul class="dropdown-menu">
              			<li><a href="#">Setting</a></li>
              			<li><a href="<?php echo site_url()?>/login/logout"">Logout</a></li>
           			 </ul>
             	</li>
    
            </ul>
		</div>
	</div>
	</nav>
</div>
</div>
<!-- Isi -->
		<div class="container">
								</div>		
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="col-lg-6 col-lg-offset-3 centered">
						<br>
							<?php echo form_open('peminjaman/index'); ?> <!-- form diganti jadi form pendaftaran -->
							<legend>Form Peminjaman</legend>
							<?php echo validation_errors(); ?>
							<?php if ($this->session->flashdata('pinjam')==true){?>
									<div class="alert alert-danger">
										<strong><?php echo $this->session->flashdata('pinjam');?></strong>
									</div>
							<?php	} ?>

							<div class="form-group">
								  
								<label for="">Tanggal Peminjaman</label>
								<input type="text" class="form-control" id="tgl_pinjam" name="tgl_pinjam" value="<?php $date=date("d/m/Y");echo set_value('tgl_pinjam',$date)?>">
								<!-- <label for="">NIM/NIP</label>
								<input type="text" class="form-control" id="fk_user" name="fk_user" placeholder="Masukkan NIM/NIP Anda"> --> 
								<label for="">Judul Buku</label>
								<select class="form-control" id="fk_buku" name="fk_buku">
								<optgroup label="Daftar Buku">
								<?php foreach ($judul_list as $key) {?>
									<option value="<?php echo $key['idBuku']?>"><?php echo $key['judul'] ?></option>
									<?php }?>
								</optgroup>
								</select>
								
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
							</div>										
							</div>			
						<?php echo form_close(); ?>
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
  		<script src="<?php echo base_url() ?>assets/js/select2.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
			  $("#fk_buku").select2();
			});
		</script>

		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>