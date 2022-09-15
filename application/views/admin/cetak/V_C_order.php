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
		<h4>Laporan Verifikasi Order</h4>
	</center>
	<table border="1" style="width: 100%">
		<tr>
			 <th>ID Order</th>
                    <th>ID Client</th>
                    <th>Tanggal</th>
                    <th>Email</th>
                    <th>Status Verifikasi</th>
                    <th>Status Pekerjaan</th>
            
		</tr>
		 <?php foreach($user as $u){ ?>
		<tr>
           <td><?php echo $u->id_order ?></td>
                    <td><?php echo $u->id_client ?></td>
                    <td><?php echo $u->tanggal ?></td>
                    <td><?php echo $u->email ?></td>
                    <td>
                     
                       <?php
                      $x =$u->status_verifikasi;
                      if ($x == '2' ) 
                          echo '<span class="badge badge-success">Success</span>';
                        elseif($x == '1' ){
                           echo '<span class="badge badge-warning">Pending</span>';
                        }
                        else
                        {
                          echo '<span class="badge badge-danger">Belum Ada Status</span>';
                        }
                      ?></td>
                       <td>
                     
                       <?php
                      $x =$u->status_pekerjaan;
                      if ($x == '2' ) 
                          echo '<span class="badge badge-success">Success</span>';
                        elseif($x == '1' ){
                           echo '<span class="badge badge-warning">Pending</span>';
                        }
                        else
                        {
                          echo '<span class="badge badge-danger">Belum Ada Status</span>';
                        }
                      ?></td>
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