<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url('') ?>assets/datatables.min.css">
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
                        <li class="active"><a href="#">User</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Buku <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Daftar Buku</a></li>
                                <li><a href="#">Kategori Buku</a></li>
                                <li><a href="#">Pengarang Buku</a></li>
                                <li><a href="#">Penerbit Buku</a></li>
                            </ul>
                        </li>
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
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>

        <!-- isi -->
        <div class="container-fluid">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h1>Peminjaman Buku</h1>
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                         <?php echo form_open_multipart('transaksi/peminjamanBuku'); ?>
                    <form action="" method="POST" role="form">
                        <?=$this->session->flashdata('pesan')?>
                        
                        <?php if (validation_errors()==true) {?>
                        
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?php echo validation_errors();?>
                        </div>  
                        <?php }?>
                        <h3>Peminjam : </h3>
                        <div class="form-group">
                            <label for="">Nama Peminjam</label>
                            <br>
                            <!-- Something Here -->
                            <select name="nama" id="nama" class="form-control">
                                <option>--Silahkan Pilih User--</option>
                                <?php 
                                    if (count) {
                                       if (count($peminjam)) {
                                            foreach ($peminjam as $list) {
                                                echo "<option value='". $list['id'] . "'>" . $list['nama'] . "</option>";
                                            }
                                        }
                                    }
                                 ?>
                            </select>
                        </div>
                        <h3>Buku yang dipinjam : </h3>
                        <div class="form-group">
                            <label for="">Buku ke-1</label>
                            <br>
                            <!-- Something Here -->
                            <select name="buku1" id="buku1" class="form-control">
                                <option value="Tidak Meminjam">--Pilih Buku (Kosongi jika tidak meminjam)--</option>
                                <?php 
                                    if (count) {
                                        if (count($buku)) {
                                            foreach ($buku as $list) {
                                                echo "<option value='".$list['idBuku']."'>".$list['judul']."</option>";
                                            }
                                        }
                                    }
                                 ?>
                            </select>
                        </div>
                          <div class="form-group">
                            <label for="">Buku ke-2</label>
                            <br>
                            <!-- Something Here -->
                            <select name="buku2" id="buku2" class="form-control">
                                <option value="Tidak Meminjam">--Pilih Buku (Kosongi jika tidak meminjam)--</option>
                                <?php 
                                    if (count) {
                                        if (count($buku)) {
                                            foreach ($buku as $list) {
                                                echo "<option value='".$list['idBuku']."'>".$list['judul']."</option>";
                                            }
                                        }
                                    }
                                 ?>
                            </select>
                        </div>
                          <div class="form-group">
                            <label for="">Buku ke-3</label>
                            <br>
                            <!-- Something Here -->
                            <select name="buku3" id="buku3" class="form-control">
                                <option value="Tidak Meminjam">--Pilih Buku (Kosongi jika tidak meminjam)--</option>
                                <?php 
                                    if (count) {
                                        if (count($buku)) {
                                            foreach ($buku as $list) {
                                                echo "<option value='".$list['idBuku']."'>".$list['judul']."</option>";
                                            }
                                        }
                                    }
                                 ?>
                            </select>
                        </div>
                          <div class="form-group">
                            <label for="">Buku ke-4</label>
                            <br>
                            <!-- Something Here -->
                            <select name="buku4" id="buku4" class="form-control">
                                <option value="Tidak Meminjam">--Pilih Buku (Kosongi jika tidak meminjam)--</option>
                                <?php 
                                    if (count) {
                                        if (count($buku)) {
                                            foreach ($buku as $list) {
                                                echo "<option value='".$list['idBuku']."'>".$list['judul']."</option>";
                                            }
                                        }
                                    }
                                 ?>
                            </select>
                        </div>
                          <div class="form-group">
                            <label for="">Buku ke-5</label>
                            <br>
                            <!-- Something Here -->
                            <select name="buku5" id="buku5" class="form-control">
                                <option value="Tidak Meminjam">--Pilih Buku (Kosongi jika tidak meminjam)--</option>
                                <?php 
                                    if (count) {
                                        if (count($buku)) {
                                            foreach ($buku as $list) {
                                                echo "<option value='".$list['idBuku']."'>".$list['judul']."</option>";
                                            }
                                        }
                                    }
                                 ?>
                            </select>
                        </div>
                        <h3>Tanggal Peminjaman : </h3>
                        <div class="form-group">
                            <label for="">Tanggal Meminjam</label>
                            <input type="date" value="<?php echo date('Y-m-d'); ?>" class="form-control" id="tanggalPeminjaman" name="tanggalPeminjaman">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Pengembalian</label>
                            <input type="date" value="<?php echo date('Y-m-d'); ?>" class="form-control" id="tanggalPengembalian" name="tanggalPengembalian">
                        </div>



                        <button type="submit" class="btn btn-primary">Tambah Buku</button>
                    </form>
                    </div>
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