<html>
<head>
	<title>Tabel Data Pembelian</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
	<div class="row justify-content-center">
	<div class="col-xl-12 col-lg-12 col-md-12">
	<div class="card shadow-sm my-0">
	<div class="card-body p-4">
	<div class="row">

	<div class="col-lg-4">
		<?php 
		include"form_data_pembelian.php";
		?>
	</div>

	<div class="col-lg-8">

	<form action="data_pembelian.php" method="GET">
		<div class="Form-Group">
			<input type="text" name="cari" class="col-lg-4">
			<button type="submit" value="cari" class="btn btn-sm btn-info mb-2 mt-1">Searching Data</button>
			<a href="data_pembelian_cetak.php" target="_blank" class="btn btn-sm btn-success mb-2 mt-1">Print Data</a>

		</div>
	</form>

		<div class="table-responsive">
		<table class="table table-striped table-bordered">
			<thead>
			<tr>
				<td>No.</td>
				<td>Kode Produk</td>
				<td>Nama Produk</td>
                <td>Supplier</td>
				<td>Harga</td>
				<td>Kondisi</td>
				<td>Action</td>
			<tr>		
			</thead>
			<tbody>
	<?php
		include"koneksi.php";
		$no=1;

		if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$sqls = mysqli_query($con,"Select * from tbl_pembelian where kd_produk like '%".$cari."%' OR nm_produk like '%".$cari."%' ");
		}else{
		$sqls = mysqli_query($con,"Select * from tbl_pembelian");
		}
		while($rs = mysqli_fetch_array($sqls)){
		?>	
		<tr>
			<td><?php echo"$no"; ?></td>
			<td><?php echo"$rs[kd_produk]"; ?></td>
			<td><?php echo"$rs[nm_produk]"; ?></td>
			<td><?php echo"$rs[supplier]"; ?></td>
			<td><?php echo"$rs[harga]"; ?></td>
			<td><?php echo"$rs[kondisi]"; ?></td>
			<td>
				<?php echo"<a href='data_pembelian.php?id=update&&edit=$rs[id_produk]'>Edit</a>"; ?> | 
				
				<a href="<?php echo"delete_data_pembelian.php?id=$rs[id_produk]"; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?')">Delete</a>
			</td>
		</tr>
	<?php $no++;	}
	?>
			</tbody>
		</table>
		</div>
	</div>

	</div>
	</div>
	</div>
	</div>
	</div>
</body>
</html>
