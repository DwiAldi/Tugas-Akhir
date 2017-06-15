<!DOCTYPE html>
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
							<li class="active"><a href="<?php echo site_url()?>/home"><i class="glyphicon glyphicon-home"></i> Home</a></li>
							<li><a href="<?php echo site_url()?>/buku/daftarbuku"><i class="glyphicon glyphicon-list-alt"></i> Daftar Buku</a></li>
              <li><a href="<?php echo site_url()?>/history/"><i class="glyphicon glyphicon-file"></i> Riwayat Peminjaman</a></li>
              <li><a href="<?php echo site_url()?>/peminjaman/"><i class="glyphicon glyphicon-pencil"></i> Form Peminjaman</a></li>
                <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo site_url()?>/home/index1"><i class="glyphicon glyphicon-user"></i> Profile</a></li>
                  <li><a href="<?php echo site_url()?>/login/logout"">Logout</a></li>
                </ul>
              </li>
    
            </ul>
						</div>
</div>
						
			<ul class="nav navbar-nav navbar-right">
              
            </ul>
          </div><!-- /.navbar-collapse -->
        </div>
      </nav>
      <div class="container">
  <h2></h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo base_url() ?>assets/img/12.jpg" alt="Image" style="width:100%;">
      </div>

      <div class="item">
           <img src="<?php echo base_url() ?>assets/img/13.jpg"  alt="Image" style="width:100%;">
      </div>

      <div class="item">
           <img src="<?php echo base_url() ?>assets/img/14.jpg"  alt="Image" style="width:100%;">
      </div>
    
     
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

           
  <br></br>
  <br></br>
           
  <table width="100%"  class="table table-condensed">
    <tr>
      <th width="20%">Incoming Books</th>
      </tr>
 <tr> <th width="100%"> </tr>
 <tr> </tr>
      <tr>
      <th width="20%">Most Borrowed Books</th>
      </tr>
      </table>

    <script src="<?php echo base_url() ?>aset/js/jquery1.js"></script>
   <script src="<?php echo base_url() ?>aset/js/custom1.js"></script>
  

		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>