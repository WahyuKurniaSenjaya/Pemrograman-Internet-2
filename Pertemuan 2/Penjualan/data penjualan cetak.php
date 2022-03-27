<body onload="javascript:window.print()" style="margin:0 auto; width: 1000px">
<div style="margin-left:20px"></div>

<p>&nbsp;</p>

<table width="100%" cellpadding="0" cellspacing="0">
	<tr>
		<td><div align="center"><font size="7">WHY STORE</font></div></td>
	</tr>  
	<tr>
		<td><div align="center"><font size="3">Jl. Slamet Riyadi Aspol Krucuk Blok A NO 1, Kota Cirebon - No. Telp : 081324184684</font></div></td>
	</tr>
</table><hr>

<label><font size="5"><u><center>Laporan Data Penjualan</center></u></font></label>

<p>&nbsp;</p>

<table style="border: 1px solid gray;" width="100%" cellspacing="0" cellpadding="0">

	<tr> 
		<th style="border-right: 1px solid gray">No.</th>
		<th style="border-right: 1px solid gray">Kode Produk</th>
		<th style="border-right: 1px solid gray">Nama Produk</th>
		<th style="border-right: 1px solid gray">Harga</th>
		<th style="border-right: 1px solid gray">Keuntungan</th>
		<th style="border-right: 1px solid gray">Tujuan</th>
		<th style="border-right: 1px solid gray">Keterangan</th>
	</tr>

	<?php
		include"koneksi.php";
		$no=1;
		$sqls = mysqli_query($con,"Select * from tbl_penjualan");
		while($rs = mysqli_fetch_array($sqls)){
		?>	
		<tr>
			<td align="center" style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$no"; ?></td>
			<td align="center" style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$rs[kd_produk]"; ?></td>
			<td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$rs[nm_produk]"; ?></td>
			<td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$rs[harga]"; ?></td>
			<td align="center" style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$rs[keuntungan]"; ?></td>
			<td align="center" style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$rs[tujuan]"; ?></td>
			<td align="center" style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$rs[ket]"; ?></td>
		</tr>
	<?php $no++;	}
	?>

<p>&nbsp;</p>

<table align="right" cellpadding="0" cellspacing="0">
	<tr><td>Cirebon, <?php echo date("d F Y") ?></td></tr>
	<tr><td>CEO WHY STORE
	<p><img src="Image/ttd.png" width="30%"></p>
	<u>Wahyu Kurnia Senjaya</u>
	</td></tr>
</table>
</body>
