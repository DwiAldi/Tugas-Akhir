<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>JTI-Library | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url('') ?>assets/datatables.min.css">

        <!-- Admin-LTE -->
        <!-- Bootstrap 3.3.6 -->
        <!-- <link rel="stylesheet" href="<?php echo base_url('') ?>/assets2/bootstrap/css/bootstrap.min.css"> -->
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="<?php echo base_url('') ?>/assets2/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url('') ?>/assets2/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo base_url('') ?>/assets2/dist/css/skins/_all-skins.min.css">


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <!-- Header Atas -->
          <header class="main-header">
            <!-- Logo -->
            <a href="index2.html" class="logo">
              <!-- mini logo for sidebar mini 50x50 pixels -->
              <span class="logo-mini"><b>J</b>TI</span>
              <!-- logo for regular state and mobile devices -->
              <span class="logo-lg"><b>Admin</b>JTI</span>
            </a>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
              <!-- Sidebar toggle button-->
              <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
              </a>
              <!-- Navbar Right Menu -->
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
       <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">Menu</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('') ?>/assets2/dist/img/polinema.png" class="img-circle" alt="User Image">
                <p>
                  Admin - JTI Library
                  <small>Admin since April. 2017</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo site_url()?>/login/logout/" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
                  <!-- Control Sidebar Toggle Button -->
                </ul>
              </div>

            </nav>
          </header>
          <!-- Menu Sidebar Sebelah Kiri -->
          <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
              <!-- Sidebar user panel -->
              <div class="user-panel">
                <div class="pull-left image">
                  <img src="<?php echo base_url('') ?>/assets2/dist/img/polinema.png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                  <p>Admin</p>
                  <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
              </div>
              <!-- sidebar menu: : style can be found in sidebar.less -->
              <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <li>
                  <a href="<?php echo site_url()?>/Home_Admin/">
                    <i class="fa fa-laptop"></i> <span>Member</span>
                  </a>
                </li>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-book"></i> <span>Buku</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?php echo site_url()?>/Buku_Admin/"><i class="fa fa-circle-o"></i>Daftar Buku</a></li>
                    <li><a href="<?php echo site_url()?>/Kategori_Admin/"><i class="fa fa-circle-o"></i>Kategori Buku</a></li>
                    <li><a href="<?php echo site_url()?>/pengarang/"><i class="fa fa-circle-o"></i>Pengarang Buku</a></li>
                    <li><a href="<?php echo site_url()?>/penerbit/"><i class="fa fa-circle-o"></i>Penerbit Buku</a></li>
                  </ul>
                </li>
                <li class="active treeview">
                  <a href="#">
                    <i class="fa fa-folder"></i> <span>Transaksi</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo site_url()?>/transaksi/"><i class="fa fa-circle-o"></i> Peminjaman Buku</a></li>
                    <li><a href="<?php echo site_url()?>/Buku_Admin/"><i class="fa fa-circle-o"></i>Pengembalian Buku</a></li>
                  </ul>
                </li>
              </ul>
            </section>
            <!-- /.sidebar -->
          </aside>


        <!-- Isi Content -->
        <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
              <h1>
                JTI-Library
                <small>Version 2.0</small>
              </h1>
              <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">User</li>
              </ol>
            </section>

            <!-- Main content -->
            <section class="content">
            <div class="container-fluid">
        <!-- isi -->
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <a href="<?php echo site_url()?>/penerbit/create"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>  Cetak Transaksi</button></a>
            <br><br>
            <div class="table-responsive">
                <table class="table table-bordered" id="example">
                    <thead>
                        <tr>
                         <th>NIM</th>
                          <th>Nama</th>
                           <th>Buku</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($transaksi as $key) { ?>
                            <tr>
                                <td><?php echo $key['nim'] ?></td>
                                <td><?php echo $key['nama'] ?></td>
                                <td><?php echo $key['judul'] ?></td>
                                <td><?php echo $key['tgl_pinjam'] ?></td>
                                <td><?php echo $key['tgl_kembali'] ?></td>
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
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
         </section>
            <!-- /.content -->
          </div>
          <!-- /.content-wrapper -->

          <footer class="main-footer">
            <div class="pull-right hidden-xs">
              <b>Version</b> 2.3.8
            </div>
            <strong>Copyright &copy; 2017 <a href="#">Dendy Falan, Dwi Aldi, Qotrunada</a>.</strong> All rights
            reserved.
          </footer>
        </div>


        <!-- jQuery -->
        <script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url('') ?>assets/datatables.min.js"></script>
         <script type="text/javascript">
            $(document).ready(function(){
                $('#example').DataTable();
                });
        </script>
        
        <!-- Admin-LTE -->
        <!-- jQuery 2.2.3 -->
        <!-- <script src="<?php echo base_url('') ?>/assets2/plugins/jQuery/jquery-2.2.3.min.js"></script> -->
        <!-- Bootstrap 3.3.6 -->
        <!-- <script src="<?php echo base_url('') ?>/assets2/bootstrap/js/bootstrap.min.js"></script> -->
        <!-- FastClick -->
        <script src="<?php echo base_url('') ?>/assets2/plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url('') ?>/assets2/dist/js/app.min.js"></script>
        <!-- Sparkline -->
        <script src="<?php echo base_url('') ?>/assets2/plugins/sparkline/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url('') ?>/assets2/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="<?php echo base_url('') ?>/assets2/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- SlimScroll 1.3.0 -->
        <script src="<?php echo base_url('') ?>/assets2/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- ChartJS 1.0.1 -->
        <script src="<?php echo base_url('') ?>/assets2/plugins/chartjs/Chart.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo base_url('') ?>/assets2/dist/js/pages/dashboard2.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url('') ?>/assets2/dist/js/demo.js"></script>

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
         <script src="Hello World"></script>
    </body>
</html>