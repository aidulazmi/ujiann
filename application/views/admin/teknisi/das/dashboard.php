 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('C_teknisi/index')?>">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php
                    $jumlah = $this->db->query("SELECT count(*) as jumlah_data FROM client")->result();
                    foreach ($jumlah as $jow) {
                    echo "<h3>$jow->jumlah_data</h3>";                
                    }
                ?>

                <p>Informasi Client</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-handshake"></i>
              </div>
              <a href="<?php echo site_url('C_teknisi/informasi_client')?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-dark">
              <div class="inner">
                <?php
                    $jumlah = $this->db->query("SELECT count(*) as jumlah_data FROM monitoring")->result();
                    foreach ($jumlah as $jow) {
                    echo "<h3>$jow->jumlah_data</h3>";                
                    }
                ?>

                <p>monitoring</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-toolbox"></i>
              </div>
              <a href="<?php echo site_url('C_teknisi/monitoring')?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

                    <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php
                    $jumlah = $this->db->query("SELECT count(*) as jumlah_data FROM mekanik")->result();
                    foreach ($jumlah as $jow) {
                    echo "<h3>$jow->jumlah_data</h3>";                
                    }
                ?>

                <p>Data Mekanik</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-list"></i>
              </div>
              <a href="<?php echo site_url('C_teknisi/mekanik')?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

        </div>
        <!-- /.row -->
      </div>
    </section>
</div>