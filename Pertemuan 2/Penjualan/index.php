<html>
<head>
	<meta charset="UTF-8">
	<title>Kelola Data WHY STORE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
<div class="header">
			<h1>WAHYU STORE</h1>
		</div>
<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12">
	<div class="card shadow-sm my-0">
	<div class="card-body p-4">
	<div class="row">

	<div class="col-lg-3">
		<h3 align="center">BARANG</h3>
  			<ul>
     			<li><a href="index.php?page=data_penjualan">Penjualan</a></li>
				<li><a href="index.php?page=data_pembelian">Pembelian</a></li>
  			</ul>
		<h3 align="center">Setting</h3>
  			<ul>
    			<li><a href="#">Setting Akun</a></li>
    			<li><a href="#">Log Out</a></li>
  			</ul>
	</div>

	<div class="col-lg-9">
		<?php
		if (isset($_GET['page'])){
			$page = $_GET['page'];

			switch($page){
				case 'data_penjualan':
					include 'data_penjualan.php';
					break;
				case 'data_pembelian':
					include 'data_pembelian.php';
					break;

				default:
				echo"Maaf, Halaman Not Found";
				break;
			}
		} else{
			include"beranda.php";
		}
		?>
    </div>

</div>
</div>
</div>
</div>
</div>

<div class="footer">
<p align="center">Copyright &copy; 2022 Wahyu Kurnia Senjaya </p></div>
</div>
</body>
</html>
