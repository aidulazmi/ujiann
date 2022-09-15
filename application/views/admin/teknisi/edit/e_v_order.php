 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ubah Data Order</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('C_teknisi/index')?>">Home</a></li>
              <li class="breadcrumb-item active">Order</li>
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
                <h3 class="card-title">Ubah Data Order</h3>
              </div>
              <!-- /.card-header -->
    
              <!-- form start -->

              <?php foreach($user as $u){ ?>
              
              <form action="<?php echo site_url('C_teknisi/update_data_v_order')?>" method="post">

                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" class="form-control" value="<?php echo $u->id_order ?>" id="exampleInputEmail1" placeholder="Order" name="id_order" required>
                  </div>

                <div class="form-group">
                        <label>ID Client</label>
                        <select class="form-control" name="id_client" id="id_kategori">
                          <option value="<?php echo $u->id_client ?>" selected><?php echo $u->id_client ?></option>
                            <?php                                
                              foreach ($user2 as $row) {  
                              echo "<option value='".$row->id_client."'>".$row->nama." -> ".$row->id_client."</option>";
                              }
                            ?>
                        </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal</label>
                    <input type="date" class="form-control" value="<?php echo $u->tanggal ?>" id="exampleInputEmail1" placeholder="Tanggal" name="tanggal" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $u->email ?>" placeholder="Email" name="email" required>
                  </div>
                  <div class="form-group">
                        <label>Verifikasi Pekerjaan</label>
                        <select class="form-control" name="status_pekerjaan" id="status_pekerjaan">
                          <option value="<?php echo $u->status_pekerjaan ?>" selected><?php echo $u->status_pekerjaan ?></option>
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