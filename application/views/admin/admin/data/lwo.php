  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Local Work Order</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('C_admin/index')?>">Home</a></li>
              <li class="breadcrumb-item active">Local Work Order</li>
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
                    Tambah Local Work Order</button>
              </div>
              <!-- /.card-header -->
              <a href="<?php echo site_url('C_admin/lwo_cetak')?>" target="_blank" class="btn btn-app bg-success" >
                  <i class="fas fa-print"></i> Cetak Laporan
                </a>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  
                  <tr>
                    <th>ID LWO</th>
                    <th>Tanggal</th>
                    <th>Equipment</th>
                    <th>Gambar Awal LWO</th>
                    <th>Gambar Akhir LWO</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
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

                    <td>
                     <!--<a class="btn btn-info btn-sm" href="<?php echo site_url('C_admin/edit_jasa/'.$u->id_jasa);?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Ubah
                      </a>-->
                      <a class="btn btn-danger btn-sm" href="<?php echo site_url('C_admin/hapus_lwo/'.$u->id_lwo);?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">
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
                    <th>ID LWO</th>
                    <th>Tanggal</th>
                    <th>Equipment</th>
                    <th>Gambar Awal LWO</th>
                    <th>Gambar Akhir LWO</th>
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
              <h4 class="modal-title">Lock Work Order</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form enctype="multipart/form-data" action="<?php echo site_url('C_admin/simpan_lwo')?>" method="POST">
                <div class="card-body">
                   <div class="form-group">
                    <label for="exampleInputEmail1">ID LWO</label>
                    <input type="text" value="<?php echo random_string('numeric',5); ?>" class="form-control" id="exampleInputEmail1" placeholder="id_lwo" name="id_lwo" readonly required>
                  </div>
                  
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
                  </div>3

                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Tanggal" name="tanggal" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Equipment</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Equipment" name="equipment" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Chasis</label>
                    <input type="text" class="form-control" onkeyup="sum();" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="exampleInputEmail1" placeholder="Chasis" name="chasis" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Engine Model</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Engine Model" name="engine_model" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Engine No</label>
                    <input type="text" class="form-control" onkeyup="sum();" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="exampleInputEmail1" placeholder="Engine No" name="engine_no" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Repair Probelem</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Repair Problem" name="repair_probelem" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Componen</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Componen" name="componen" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kondisi</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Kondisi" name="kondisi" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Saran</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="saran" name="saran" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Note</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="note" name="note" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Standar Diameter</label>
                    <input type="text" class="form-control" onkeyup="sum();" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="exampleInputEmail1" placeholder="Standar Diameter" name="standardiameter" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Standar Panjang</label>
                    <input type="text" class="form-control" onkeyup="sum();"  onkeypress="return event.charCode >= 48 && event.charCode <=57" id="exampleInputEmail1" placeholder="Standar Panjang" name="standarpanjang" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Aktual Diameter</label>
                    <input type="text" class="form-control" onkeyup="sum();" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="exampleInputEmail1" placeholder="Aktual Diameter" name="actualdiameter" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputFile">Gambar Awal LWO</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="gambarawallwo" class="custom-file-input" id="exampleInputFile" onchange="readURL(this);">
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
                    <label for="exampleInputFile">Gambar Akhir LWO</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="gambarakhirlwo" class="custom-file-input" id="exampleInputFile" onchange="readURL2(this);">
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