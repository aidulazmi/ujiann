  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Monitoring</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('C_teknisi/index')?>">Home</a></li>
              <li class="breadcrumb-item active">Monitoring</li>
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
                    Tambah Monitoring</button>
              </div>
              <!-- /.card-header -->
              <a href="<?php echo site_url('C_teknisi/monitoring_cetak')?>" target="_blank" class="btn btn-app bg-success" >
                  <i class="fas fa-print"></i> Cetak Laporan
                </a>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  
                  <tr>
                    <th>ID Monitoring</th>
                    <th>Tanggal</th>
                    <th>Model Unit</th>
                    <th>Gambar Awal</th>
                    <th>Gambar Akhir</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($user as $u){ ?>
                  <tr>
                    <td><?php echo $u->id_monitoring ?></td>
                    <td><?php echo $u->tanggal ?></td>
                    <td><?php echo $u->modelunit ?></td>
                    <td>
                      <a href="<?=base_url()?>uploads/monitoring/<?=$u->gambarawal;?>" data-toggle="lightbox" data-title="gambarawal" data-gallery="gallery" width="100%" height="100%">
                      <img src="<?=base_url()?>uploads/monitoring/<?=$u->gambarawal;?>" width="100" height="100" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                    </td>

                    <td>
                      <a href="<?=base_url()?>uploads/monitoring/<?=$u->gambarakhir;?>" data-toggle="lightbox" data-title="gambarakhir" data-gallery="gallery" width="100%" height="100%">
                      <img src="<?=base_url()?>uploads/monitoring/<?=$u->gambarakhir;?>" width="100" height="100" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                    </td>

                    <td>
                     <!--<a class="btn btn-info btn-sm" href="<?php echo site_url('C_teknisi/edit_jasa/'.$u->id_jasa);?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Ubah
                      </a>-->
                      <a class="btn btn-danger btn-sm" href="<?php echo site_url('C_teknisi/hapus_monitoring/'.$u->id_monitoring);?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">
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
                    <th>ID Monitoring</th>
                    <th>Tanggal</th>
                    <th>Model Unit</th>
                    <th>Gambar Awal</th>
                    <th>Gambar Akhir</th>
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
              <h4 class="modal-title">Tambah Data Monitoring</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form enctype="multipart/form-data" action="<?php echo site_url('C_teknisi/simpan_monitoring')?>" method="POST">
                <div class="card-body">
                  <div class="form-group">
                        <label>ID LWO</label>
                        <select class="form-control" name="id_lwo" id="id_kategori">
                          <option value="" selected>Silahkan Isi ID LWO</option>
                            <?php                                
                              foreach ($user2 as $row) {  
                              echo "<option value='".$row->id_lwo."'>".$row->id_lwo."</option>";
                              }
                            ?>
                        </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Tanggal" name="tanggal" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Model Unit</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Model Unit" name="modelunit" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Serial Number</label>
                    <input type="text" class="form-control" onkeyup="sum();" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="exampleInputEmail1" placeholder="Serial Number" name="serialnumber" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jobdes</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="JobDes" name="jobdes" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Lokasi</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Lokasi" name="lokasi" required>
                  </div>
                  <div class="form-group">
                        <label>Verifikasi Pekerjaan</label>
                        <select class="form-control" name="statusperkerjaan" id="  statusperkerjaan">
                          <option value="" selected>Silahkan Isi Verifikasi Pekerjaan</option>
                          <option value="1">Belum Di Verifikasi</option>
                          <option value="2">Sadang Dalam Pengerjaan</option>
                          <option value="3">Succes</option>
                        </select>
                  </div>
                  <div class="form-group">
                        <label>Verifikasi</label>
                        <select class="form-control" name="statusverifikasi" id="  statusperkerjaan">
                          <option value="" selected>Silahkan Isi Verifikasi</option>
                          <option value="1">Belum Di Verifikasi</option>
                          <option value="2">Pending</option>
                          <option value="3">Succes</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Gambar Awal Monitoring</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="gambarawal" class="custom-file-input" id="exampleInputFile" onchange="readURL(this);">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="text-center">
                            <img id="blah" class="profile-user-img img-fluid img-circle"
                                 src="<?=base_url();?>/asset/admin/avatar(1).png"
                                 alt="your image">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Gambar Akhir Monitoring</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="gambarakhir" class="custom-file-input" id="exampleInputFile" onchange="readURL2(this);">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="text-center">
                            <img id="blah2" class="profile-user-img img-fluid img-circle"
                                 src="<?=base_url();?>/asset/admin/avatar(1).png"
                                 alt="your image">
                      </div>
                    </div>
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

    <script type="text/javascript">
       function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
         function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah2')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
         
    </script>