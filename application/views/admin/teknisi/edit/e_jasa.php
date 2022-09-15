 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ubah Data Layanan Jasa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('C_teknisi/index')?>">Home</a></li>
              <li class="breadcrumb-item active">Layanan Jasa</li>
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
                <h3 class="card-title">Ubah Data Jasa</h3>
              </div>
              <!-- /.card-header -->
    
              <!-- form start -->

              <?php foreach($user as $u){ ?>
              
              <form enctype="multipart/form-data" action="<?php echo site_url('C_teknisi/update_data_jasa')?>" method="post">

                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" class="form-control" value="<?php echo $u->id_jasa ?>" id="exampleInputEmail1" placeholder="client" name="id_jasa" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Layanan Jasa</label>
                    <input type="text" class="form-control" value="<?php echo $u->layanan_jasa ?>" id="exampleInputEmail1" placeholder="Layanan Jasa" name="layanan_jasa" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga</label>
                    <input type="text" class="form-control" value="<?php echo $u->harga ?>" id="exampleInputEmail1" placeholder="Harga" name="harga" required>
                  </div>

                  <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Foto Jasa</label>
                        <div class="col-sm-10">
                          <input type="file" name="foto" value="<?php echo $u->foto ?>" class="form-control" id="exampleInputFile" onchange="readURL(this);" >
                          <?php if($u->foto == ""){
                            echo '<input type="text" name="foto">';
                          }else{
                            echo '<input type="text" name="foto" value="'.$u->foto.'">';
                          }?>
                          
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
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