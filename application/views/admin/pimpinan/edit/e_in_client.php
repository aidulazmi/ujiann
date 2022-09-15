 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ubah Data Client</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('C_teknisi/index')?>">Home</a></li>
              <li class="breadcrumb-item active">Client</li>
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
                <h3 class="card-title">Ubah Data Client</h3>
              </div>
              <!-- /.card-header -->
    
              <!-- form start -->

              <?php foreach($user as $u){ ?>
              
              <form action="<?php echo site_url('C_teknisi/update_data_client')?>" method="post">

                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" class="form-control" value="<?php echo $u->id_client ?>" id="exampleInputEmail1" placeholder="client" name="id_client" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" value="<?php echo $u->nama ?>" id="exampleInputEmail1" placeholder="Username" name="nama" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control" value="<?php echo $u->alamat ?>" id="exampleInputEmail1" placeholder="Alamat" name="alamat" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">No Telpon</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $u->no_telp ?>" placeholder="No Telpon" name="no_telp" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" value="<?php echo $u->email ?>" id="exampleInputEmail1" placeholder="Email" name="email" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" class="form-control" value="<?php echo $u->password ?>" id="exampleInputEmail1" placeholder="Password" name="password" required>
                  </div>
                  <div class="form-group">
                        <label>Verifikasi Client</label>
                        <select class="form-control" name="verifikasi_client" id="verifikasi_client">
                          <option value="<?php echo $u->verifikasi_client ?>" selected><?php echo $u->verifikasi_client ?></option>
                          <option value="1">Pending (1)</option>
                          <option value="2">Success(2)</option>
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