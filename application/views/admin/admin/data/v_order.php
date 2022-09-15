  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Verifikasi Order</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('C_admin/index')?>">Home</a></li>
              <li class="breadcrumb-item active">Verifikasi Order</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-primary"><i class="fas fa-file-import"> </i>   
                    Tambah Verifikasi Order</button>
              </div>
              <!-- /.card-header -->
               <a href="<?php echo site_url('C_admin/v_order_cetak')?>" target="_blank" class="btn btn-app bg-success" >
                  <i class="fas fa-print"></i> Cetak Laporan
                </a>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                   
                  <tr>
                    <th>ID Order</th>
                    <th>ID Client</th>
                    <th>Tanggal</th>
                    <th>Email</th>
                    <th>Status Verifikasi</th>
                    <th>Status Pekerjaan</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
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

                    <td>
                    <a class="btn btn-info btn-sm" href="<?php echo site_url('C_admin/edit_v_order/'.$u->id_order);?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Ubah
                      </a>
                      <a class="btn btn-danger btn-sm" href="<?php echo site_url('C_admin/hapus_v_order/'.$u->id_order);?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">
                              <i class="fas fa-trash">
                              </i>
                              Hapus
                      </a>
                  
                      
                    </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID Order</th>
                    <th>ID Client</th>
                    <th>Tanggal</th>
                    <th>Email</th>
                    <th>Status Verifikasi</th>
                    <th>Status Pekerjaan</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->



        <!-- Tambah Kategori -->
        <div class="modal fade" id="modal-primary">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data Verifikasi Order</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="<?php echo site_url('C_admin/simpan_v_order')?>" method="POST">
                <div class="card-body">
                   <div class="form-group">
                        <label>ID Client</label>
                        <select class="form-control" name="id_client" id="id_kategori">
                          <option value="" selected>Silahkan Isi ID Client berdasarkan Nama</option>
                            <?php                                
                              foreach ($user2 as $row) {  
                              echo "<option value='".$row->id_client."'>".$row->nama."</option>";
                              }
                            ?>
                        </select>
                  </div>
                  <div class="form-group">
                        <label>ID Jasa</label>
                        <select class="form-control" name="id_jasa" id="id_kategori">
                          <option value="" selected>Silahkan Isi ID Jasa berdasarkan Layanan Jasa</option>
                            <?php                                
                              foreach ($user3 as $row) {  
                              echo "<option value='".$row->id_jasa."'>".$row->layanan_jasa."</option>";
                              }
                            ?>
                        </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Tanggal" name="tanggal" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" required>
                  </div>
                  <div class="form-group">
                        <label>Verifikasi Order</label>
                        <select class="form-control" name="status_verifikasi" id="verifikasi_client">
                          <option value="" selected>Silahkan Isi Verifikasi</option>
                          <option value="1">Pending</option>
                          <option value="2">Success</option>
                        </select>
                  </div>                  
                  <div class="form-group">
                        <label>Verifikasi Perkejaan</label>
                        <select class="form-control" name="status_pekerjaan" id="verifikasi_client">
                          <option value="" selected>Silahkan Isi Verifikasi</option>
                          <option value="1">Pending</option>
                          <option value="2">Success</option>
                        </select>
                  </div> 
                </div>
                <!-- /.card-body -->
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tutup</button>
              <button type="Submit" name="Simpan" class="btn btn-outline-light">Simpan</button>
            </div>

            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
      <!-- /.modal -->