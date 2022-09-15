  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Informasi Client</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('C_teknisi/index')?>">Home</a></li>
              <li class="breadcrumb-item active">Informasi Client</li>
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
                    Tambah Data Client</button>
              </div>
              <!-- /.card-header -->
              <a href="<?php echo site_url('C_teknisi/informasi_client_cetak')?>" target="_blank" class="btn btn-app bg-success" >
                  <i class="fas fa-print"></i> Cetak Laporan
                </a>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    
                  <tr>
                    <th>ID Client</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Telpon</th>
                    <th>Email</th>
                    <th>Verifikasi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($user as $u){ ?>
                  <tr>
                    <td><?php echo $u->id_client ?></td>
                    <td><?php echo $u->nama ?></td>
                    <td><?php echo $u->alamat ?></td>
                    <td><?php echo $u->no_telp ?></td>
                    <td><?php echo $u->email ?></td>
                    <td>
                       <?php
                      $x =$u->verifikasi_client;
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
                    <!-- <td>
                      <a class="btn btn-info btn-sm" href="<?php echo site_url('C_teknisi/edit_client/'.$u->id_client);?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Ubah
                      </a>
                      <a class="btn btn-danger btn-sm" href="<?php echo site_url('C_teknisi/hapus_client/'.$u->id_client);?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">
                              <i class="fas fa-trash">
                              </i>
                              Hapus
                      </a>
                    
                      
                    </td> -->
                  </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID Client</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Telpon</th>
                    <th>Email</th>
                    <th>Verifikasi</th>
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
              <h4 class="modal-title">Tambah Data Client</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="<?php echo site_url('C_teknisi/simpan_client')?>" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username" name="nama" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Alamat" name="alamat" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">No Telpon</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="No Telpon" name="no_telp" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Password" name="password" required>
                  </div>
                  <div class="form-group">
                        <label>Verifikasi Client</label>
                        <select class="form-control" name="verifikasi_client" id="verifikasi_client">
                          <option value="" selected>Silahkan Isi Verifikasi Client</option>
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