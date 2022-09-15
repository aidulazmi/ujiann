 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ubah Data Mekanik</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('C_teknisi/index')?>">Home</a></li>
              <li class="breadcrumb-item active">Layanan Mekanik</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ubah Data Mekanik</h3>
              </div>
              <!-- /.card-header -->
    
              <!-- form start -->

              <?php foreach($user as $u){ ?>
              
              <form action="<?php echo site_url('C_teknisi/update_data_mekanik')?>" method="post">

                <div class="card-body">

                  <div class="form-group">
                    <input type="hidden" class="form-control" value="<?php echo $u->id_mekanik ?>" id="exampleInputEmail1" placeholder="ID Mekanik" name="id_mekanik" required>
                  </div>

                  <div class="form-group">
                        <label>ID LWO</label>
                        <select class="form-control" name="id_lwo" id="id_kategori">
                          <option value="<?php echo $u->id_lwo ?>" selected><?php echo $u->id_lwo ?></option>
                          <option value="">Silahkan Isi ID LWO</option>
                            <?php                                
                              foreach ($user2 as $row) {  
                              echo "<option value='".$row->id_lwo."'>".$row->id_lwo."</option>";
                              }
                            ?>
                        </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" value="<?php echo $u->nama ?>" id="exampleInputEmail1" placeholder="Nama" name="nama" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Divisi</label>
                    <input type="text" class="form-control" value="<?php echo $u->divisi ?>" id="exampleInputEmail1" placeholder="Divisi" name="divisi" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control" value="<?php echo $u->alamat ?>" id="qty1" placeholder="Alamat" name="alamat" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" value="<?php echo $u->email ?>" id="exampleInputEmail1" placeholder="email" name="email" required>
                  </div>
                  <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status" id="status">
                          <option value="<?php echo $u->status ?>" selected><?php echo $u->status ?></option>
                          <option value="" >Silahkan Isi Verifikasi Pekerjaan</option>
                          <option value="1">Pending(1)</option>
                          <option value="2">Succes(2)</option>
                        </select>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit</button>
                </div>
              </form>
               <?php } ?>
            </div>
            <!-- /.card -->
            </div>
          </div>
        </div>
      </div>
    </section>