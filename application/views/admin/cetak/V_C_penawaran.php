<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PT Servitama Internusa Pekanbaru</title>
  <link rel="icon" type="image/png" href="<?=base_url();?>/asset/login/images/firman.jpg"/>

	<style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: white;
  color: black;
  text-align: center;
}
</style>

</head>
<body>

	<center>
		<h2><img src="<?=base_url();?>/asset/login/images/firman.jpg" height="42" width="40"> PT Servitama Internusa Pekanbaru</h2>
		<h4>Laporan Penawaran</h4>
	</center>
	<table border="1" style="width: 100%">
		<tr>
			<th>ID Penawaran</th>
      <th>ID Client</th>
      <th>Tanggal</th>
      <th>Keteragan</th>
      <th>QTY</th>
      <th>Unit</th>
      <th>Biaya</th>
      <th>Jumlah</th>
            
		</tr>
		 <?php foreach($user as $u){ ?>
		<tr>
            <td><?php echo $u->id_penawaran ?></td>
            <td><?php echo $u->id_client ?></td>
            <td><?php echo $u->tanggal ?></td>
            <td><?php echo $u->keterangan ?></td>
            <td><?php echo $u->qty ?></td>
            <td><?php echo $u->unit ?></td>
            <td>Rp. <?php echo $u->biaya ?></td>
            <td>Rp. <?php echo $u->jumlah ?></td>
		</tr>
<?php } ?>
	</table>
	<p align="right"> Pekanbaru, <?php echo date('d M y');?> </p>
	<br>
	<br>
	<br>
	<p align="right"> AINUL FUADI

<div class="footer">
  <hr>
  <p><b>Alamat :</b></p>
  <p>Jl. Konsolidasi 5 Blok A No. 11</p>
  <p>Simpang Baru - Tampan Kota Pekanbaru Riau - 28293</p>
</div>
<script>
		window.print();
	</script>
</body>
</html>