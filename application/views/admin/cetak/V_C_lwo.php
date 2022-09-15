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
		<h4>Laporan Local Work Order</h4>
	</center>
	<table border="1" style="width: 100%">
		<tr>
			  <th>ID LWO</th>
                    <th>Tanggal</th>
                    <th>Equipment</th>
                    <th>Gambar Awal LWO</th>
                    <th>Gambar Akhir LWO</th>
            
		</tr>
		 <?php foreach($user as $u){ ?>
		<tr>
          <td><?php echo $u->id_lwo ?></td>
                    <td><?php echo $u->tanggal ?></td>
                    <td><?php echo $u->equipment ?></td>
                    <td>
                      <a href="<?=base_url()?>uploads/lwo/<?=$u->gambarawallwo;?>" data-toggle="lightbox" data-title="gambarawallwo" data-gallery="gallery" width="100%" height="100%">
                      <img src="<?=base_url()?>uploads/lwo/<?=$u->gambarawallwo;?>" width="100" height="100" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                    </td>

                    <td>
                      <a href="<?=base_url()?>uploads/lwo/<?=$u->gambarakhirlwo;?>" data-toggle="lightbox" data-title="gambarakhirlwo" data-gallery="gallery" width="100%" height="100%">
                      <img src="<?=base_url()?>uploads/lwo/<?=$u->gambarakhirlwo;?>" width="100" height="100" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                    </td>
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