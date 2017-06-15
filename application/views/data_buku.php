<!DOCTYPE htmlTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Perpustakaan</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>aset/css/main.css">
   
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
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
                  <li><a href="login/logout">Logout</a></li>
                </ul>
              </li>
    
            </ul>
								</div><!-- /.navbar-collapse -->
						</div>
						</nav>

					</div>	
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h1>Data Buku</h1>	
						<div class="table-responsive">
							<table class="table table-hover" id="example">
								<thead>
									<tr>
									
										<th>Kategori</th>
										<th>Foto</th>
										<th>Judul</th>
										<th>Pengarang</th>
										<th>Penerbit</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($kategori_list as $key) { ?>
									<tr>

										<td><?php echo $key->namaKategori ?></td>
										 <td><img width="100" height="100" src="<?=base_url()?>assets/uploads/<?=$key->foto?>"></td>
										<td><?php echo $key->judul ?></td>
										<td><?php echo $key->namaPengarang ?></td>
										<td><?php echo $key->namaPenerbit ?></td>
									</tr>
								<?php } ?>
								</tbody>
							</table>
						</div>
					</div>



		 <script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url('') ?>assets/datatables.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#example').DataTable();
                });
        </script>
 		<script src="Hello World"></script>
	</body>
</html>