 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ubah Data Penawaran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('C_teknisi/index')?>">Home</a></li>
              <li class="breadcrumb-item active">Penawaran</li>
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
                <h3 class="card-title">Ubah Data Penawaran</h3>
              </div>
              <!-- /.card-header -->
    
              <!-- form start -->

              <?php foreach($user as $u){ ?>
              
              <form action="<?php echo site_url('C_teknisi/update_data_penawaran')?>" method="post">

                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" value="<?php echo $u->id_penawaran ?>" class="form-control" id="exampleInputEmail1" placeholder="ID Penawaran" name="id_penawaran" required>
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
                    <input type="date" value="<?php echo $u->tanggal ?>" class="form-control" id="exampleInputEmail1" placeholder="Tanggal" name="tanggal" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <input type="text" value="<?php echo $u->keterangan ?>" class="form-control" id="exampleInputEmail1" placeholder="Keterangan" name="keterangan" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">QTY</label>
                    <input type="text" value="<?php echo $u->qty ?>" class="form-control" id="qty1" onkeyup="sum();" placeholder="qty" onkeypress="return event.charCode >= 48 && event.charCode <=57" name="qty" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Unit</label>
                    <input type="text" value="<?php echo $u->unit ?>" class="form-control" id="exampleInputEmail1" placeholder="Unit" name="unit" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga</label>
                    <input type="text"  value="<?php echo $u->biaya ?>" class="form-control" id="harga1" onkeyup="sum();" placeholder="biaya" onkeypress="return event.charCode >= 48 && event.charCode <=57" name="biaya" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah</label>
                    <input type="text" value="<?php echo $u->jumlah ?>" class="form-control" id="jumlah1" placeholder="Jumlah" name="jumlah" readonly>
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