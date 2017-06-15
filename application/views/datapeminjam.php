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
                                <li><a href="<?php echo site_url()?>/Buku_Admin/">Daftar Buku</a></li>
                                <li><a href="<?php echo site_url()?>/kategori_admin/">Kategori Buku</a></li>
                                <li><a href="<?php echo site_url()?>/pengarang/">Pengarang Buku</a></li>
                                <li><a href="<?php echo site_url()?>/penerbit/">Penerbit Buku</a></li>
                            </ul>
                        </li>
                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Transaksi <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url()?>/transaksi/peminjamanBuku">Peminjaman</a></li>
                                <li><a href="<?php echo site_url()?>/kategori_admin/">Pengembalian</a></li>
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
                                <li><a href="<?php echo site_url()?>/login/logout">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>

        <!-- Isi -->
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<a href="<?php echo site_url()?>/penerbit/create"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah Penerbit</button></a>
			<br><br>
            <div class="table-responsive">
                <table class="table table-bordered" id="example">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Nomor Telepon</th>
                            <th>Menu</th>
                        </tr>
                    </thead>
                    <tbody>
	                    <?php foreach ($penerbit_list as $key) { ?>
	                        <tr>
	                            <td><?php echo $key->id ?></td>
	                            <td><?php echo $key->namaPenerbit ?></td>
	                            <td><?php echo $key->alamatPenerbit ?></td>
	                            <td><?php echo $key->no_telp ?></td>
	                            <td>
	                                <a href="<?php echo site_url('penerbit/update/').$key->id ?>" type="button" class="btn btn-success"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a>
	                                <a href="<?php echo site_url('penerbit/delete/').$key->id ?>" type="button" class="btn btn-danger" onClick="JavaScript: return confirm('Anda yakin Hapus data ini ?')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</a>
	                            </td>
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
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>