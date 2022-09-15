  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Penawaran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('C_admin/index')?>">Home</a></li>
              <li class="breadcrumb-item active">Informasi Penawaran</li>
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
                    Tambah Data Penawaran</button>
              </div>
              <!-- /.card-header -->
              <a href="<?php echo site_url('C_admin/penawaran_cetak')?>" target="_blank" class="btn btn-app bg-success" >
                  <i class="fas fa-print"></i> Cetak Laporan
                </a>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    
                  <tr>
                    <th>ID Penawaran</th>
                    <th>ID Client</th>
                    <th>Tanggal</th>
                    <th>Keteragan</th>
                    <th>QTY</th>
                    <th>Unit</th>
                    <th>Biaya</th>
                    <th>Jumlah</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($user as $u){ ?>
                  <tr>
                    <td><?php echo $u->id_penawaran ?></td>
                    <td><?php echo $u->id_client ?></td>
                    <td><?php echo $u->tanggal ?></td>
                    <td><?php echo $u->keterangan ?></td>
                    <td><?php echo $u->qty ?></td>
                    <td><?php echo $u->unit ?></td>
                    <td>Rp. <?php echo $u->biaya ?></td>
                    <td>Rp. <?php echo $u->jumlah ?></td>
                    <td>
                      <a class="btn btn-info btn-sm" href="<?php echo site_url('C_admin/edit_penawaran/'.$u->id_penawaran);?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Ubah
                      </a>
                      <a class="btn btn-danger btn-sm" href="<?php echo site_url('C_admin/hapus_penawaran/'.$u->id_penawaran);?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">
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
                    <th>ID Penawaran</th>
                    <th>ID Client</th>
                    <th>Tanggal</th>
                    <th>Keteragan</th>
                    <th>QTY</th>
                    <th>Unit</th>
                    <th>Biaya</th>
                    <th>Jumlah</th>
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
              <h4 class="modal-title">Tambah Data Penawaran</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="<?php echo site_url('C_admin/simpan_penawaran')?>" method="POST">
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
                    <label for="exampleInputEmail1">Tanggal</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Tanggal" name="tanggal" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Keterangan" name="keterangan" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">QTY</label>
                    <input type="text" class="form-control" id="qty1" onkeyup="sum();" placeholder="qty" onkeypress="return event.charCode >= 48 && event.charCode <=57" name="qty" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Unit</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Unit" name="unit" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga (Rp.)</label>
                    <input type="text" class="form-control" id="harga1" onkeyup="sum();" placeholder="biaya" onkeypress="return event.charCode >= 48 && event.charCode <=57" name="biaya" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah(Rp.)</label>
                    <input type="text" class="form-control" id="jumlah1" placeholder="Jumlah" name="jumlah" readonly>
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

<script>
function sum() {
      var txtFirstNumberValue = document.getElementById('qty1').value;
      var txtSecondNumberValue = document.getElementById('harga1').value;
      var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('jumlah1').value = result;
      }
}
</script>