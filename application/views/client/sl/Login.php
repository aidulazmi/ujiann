<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Sistem Informasi Alat Berat</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <!-- //Meta tag Keywords -->
    <link rel="icon" type="image/png" href="<?=base_url();?>/asset/login/images/firman.jpg"/>
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <!--/Style-CSS -->
    <link rel="stylesheet" href="<?=base_url();?>/asset/loginu/css/style.css" type="text/css" media="all" />
    <!--//Style-CSS -->
    <link rel="stylesheet" href="<?=base_url();?>/asset/loginu/css/font-awesome.min.css" type="text/css" media="all">

</head>

<body>
    <div class="w3l-signinform">
        <!-- container -->
        <div class="wrapper">
            <!-- main content -->
            <div class="w3l-form-info">
                <div class="w3_info">
                    <h1>Selamat Datang</h1>
                    <p class="sub-para">Sistem Informasi Alat Berat</p>
                    <h2>LogIn</h2>
                    <form method="post" action="<?php echo site_url('C_client/login1')?>">
                        <div class="input-group">
                            <span><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input type="email" name="email" placeholder="Masukkan Email" required>
                        </div>
                        <div class="input-group two-groop">
                            <span><i class="fa fa-key" aria-hidden="true"></i></span>
                            <input type="Password" name="password" placeholder="Masukkan Password" required>
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Masuk</button>
                    </form>
                
                    <p class="account">Kamu Belum Memiliki Akun? <a href="<?php echo site_url('C_client/daftar')?>">Daftar</a></p>
                </div>
            </div>
            <!-- //main content -->
        </div>
        <!-- //container -->
    </div>

</body>

</html>