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
		<h1 class="text-center">Transaksi Perpustakaan JTI</h1>
		<br><br>
		<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
		<label for="">Tanggal Pencetakan : </label>
		<h4><p id="date" align="justify"></p></h4>
		<br>	
		</div>
		 
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered" id="example" align="center">
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

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script>
		n =  new Date();
		y = n.getFullYear();
		m = n.getMonth() + 1;
		d = n.getDate();
		document.getElementById("date").innerHTML = d + "-" + m + "-" + y;
		</script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>