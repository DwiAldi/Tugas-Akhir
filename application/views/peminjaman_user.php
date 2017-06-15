<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- Menu Navigasi -->
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Welcome, Admin !</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Welcome, Admin !</a>
                </div>
        
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo site_url()?>/Home_Admin/">User</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Buku <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url()?>/Buku_Admin/">Daftar Buku</a></li>
                                <li><a href="<?php echo site_url()?>/kategori_admin/">Kategori Buku</a></li>
                                <li><a href="<?php echo site_url()?>/pengarang/">Pengarang Buku</a></li>
                                <li><a href="<?php echo site_url()?>/penerbit/">Penerbit Buku</a></li>
                            </ul>
                        </li>
                         <li><li><a href="<?php echo site_url()?>/transaksi/">Transaksi</a></li></li>
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Profile</a></li>
                                <li><a href="<?php echo site_url()?>/login/logout">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>

        <!-- Isi -->
        <div id="page-wrapper">
          <div class="container-fluid"> 
            <div class="row">
              <div class="col-lg-12">
                <h1 class="page-header">Data Peminjaman Anggota</h1>

                <div class="row">
                    <div class="col-md-12">
				<!-- 	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h1>Selamat Datang, Admin!</h1>	 --> 
						<div class="table-responsive">
						<table class="table table-bordered" id="example">
								
								<thead>
									<tr>
										<td>Tanggal Pinjam</td>
										<td>Tanggal Kembali</td>
										<td>NIM/NIP</td>
										<td>Judul</td>
										<td>Status</td>
										<td>Opsi</td>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($user_pinjam as $key) {?>
									<tr>
										<td><?php echo date("d-m-Y", strtotime($key['tgl_pinjam'])) ?></td>
										<td><?php echo date("d-m-Y", strtotime($key['tgl_kembali'])) ?></td>
										<td><?php echo $key['nim'] ?></td>
										<td><?php echo $key['judul'] ?></td>
										<td>
										<?php 
		                                    if($key['status']=='periode_peminjaman'){
		                                        $status = 'Periode Peminjaman';
		                                    }
		                                    if($key['status']=='kembali'){
		                                        $status = 'Dikembalikan';
		                                    }
		                                    echo $status;
		                                ?>
										</td>
										<td><button type="button" class="btn btn-success" onClick="window.location.href='<?php echo site_url() ?>/pengembalian/index/<?php echo $key['id_peminjaman']?>'">Kembali</button></td>
									</tr>	
									<?php } ?>
								</tbody>
							</table>
							<!-- <button type="button" class="btn btn-success" onClick="window.location.href='<?php echo site_url() ?>/kembali/index/<?php echo $key['nim']?>'">Cek Denda</button> -->
						</div>
					</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>