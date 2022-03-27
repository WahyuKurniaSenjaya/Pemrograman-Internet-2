<?php 
function Update_data(){
include"koneksi.php";
$sqls = mysqli_query($con,"Select * from tbl_pembelian where id_produk = $_GET[edit]");
$rs = mysqli_fetch_array($sqls);
?>
<form method="POST">
<div class="text-center">
<h3 class="h4 text-gray-900 mb 4">FORM EDIT DATA PEMBELIAN</h3>
</div>
	<div class="form-group">
	<label>Kode Produk :</label>
	<input type="hidden" name="id_produk" class="form-control" value="<?php echo"$rs[id_produk]" ?>">
	<input type="text" name="kd_produk" class="form-control" value="<?php echo"$rs[kd_produk]" ?>">
	</div>

	<div class="form-group">
	<label>Nama Produk :</label>
	<input type="text" name="nm_produk" class="form-control" value="<?php echo"$rs[nm_produk]" ?>">
	</div>

	<div class="form-group">
	<label>Supplier :</label>
	<input type="text" name="supplier" class="form-control" value="<?php echo"$rs[supplier]" ?>">
	</div>

    <div class="form-group">
	<label>Harga :</label>
	<input type="text" name="harga" class="form-control" value="<?php echo"$rs[harga]" ?>">
	</div>

    <div class="form-group">
	<label>Kondisi :</label>
	<input type="text" name="kondisi" class="form-control" value="<?php echo"$rs[kondisi]" ?>">
	</div>

	<div class="form-group">
	<input type="submit" name="submit" class="btn btn-info" value="Update Data">
	</div>

</form>
<?php
if($_SERVER['REQUEST_METHOD']== "POST"){
	include"koneksi.php";
	mysqli_query($con,"update tbl_pembelian set kd_produk='$_POST[kd_produk]', nm_produk='$_POST[nm_produk]', supplier='$_POST[supplier]', harga='$_POST[harga]', kondisi='$_POST[kondisi]' where id_produk='$_POST[id_produk]'");

	echo"<script language = 'JavaScript'> confirm('Data Berhasil Diupdate!');
	document.location='data_pembelian.php'; </script>";
}
?>



<?php
}
?>


<?php 
function Input_data(){
?>
<form method="POST">
<div class="text-center">
<h3 class="h4 text-gray-900 mb 4">FORM INPUT DATA PEMBELIAN</h3>
</div>
<div class="form-group">
	<label>Kode Produk :</label>
	<input type="hidden" name="id_produk" class="form-control" value="<?php echo"$rs[id_produk]" ?>">
	<input type="text" name="kd_produk" class="form-control" value="<?php echo"$rs[kd_produk]" ?>">
	</div>

	<div class="form-group">
	<label>Nama Produk :</label>
	<input type="text" name="nm_produk" class="form-control" value="<?php echo"$rs[nm_produk]" ?>">
	</div>

	<div class="form-group">
	<label>Supplier :</label>
	<input type="text" name="supplier" class="form-control" value="<?php echo"$rs[supplier]" ?>">
	</div>

    <div class="form-group">
	<label>Harga :</label>
	<input type="text" name="harga" class="form-control" value="<?php echo"$rs[harga]" ?>">
	</div>

    <div class="form-group">
	<label>Kondisi :</label>
	<input type="text" name="kondisi" class="form-control" value="<?php echo"$rs[kondisi]" ?>">
	</div>

	<div class="form-group">
	<input type="submit" name="submit" class="btn btn-info" value="Simpan Data">
	</div>

</form>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	include"koneksi.php";
	mysqli_query($con, "insert into tbl_pembelian (kd_produk, nm_produk, supplier, harga, kondisi) values ('$_POST[kd_produk]','$_POST[nm_produk]','$_POST[supplier]','$_POST[harga]','$_POST[kondisi]')");

	echo"<script language = 'JavaScript'> confirm('Data Berhasil Disimpan!');
	document.location='index.php?page=data_pembelian'; </script>";
}
?>
<?php
}
?>

<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$id = $_GET['id'];
if($id == "update"){
	Update_data();
}else{
	Input_data();
}
?>
