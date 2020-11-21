  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- general form elements -->
          <div class="card card-warning">
            <div class="card-header">
              <h3 class="card-title">Edit Data Calon</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <?php foreach ($calonData as $data) : ?>
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label>No. Urut</label>
                    <input type="text" class="form-control" placeholder="Nomor urut" name="varNoUrut" value="<?= $data->no_urut ?>">
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" placeholder="Nama calon" name="varNama" value="<?= $data->nama ?>">
                  </div>
                  <div class="form-group">
                    <label>Kelas</label>
                    <input type="text" class="form-control" placeholder="Kelas" name="varKelas" value="<?= $data->kelas ?>">
                  </div>
                  <div class="form-group">
                    <label>Visi</label>
                    <textarea name="varVisi" class="form-control" cols="30" rows="10"><?= $data->visi ?></textarea>
                  </div>
                  <div class="form-group">
                    <label>Misi</label>
                    <textarea name="varMisi" class="form-control" cols="30" rows="10"><?= $data->misi ?></textarea>
                  </div>
                  <div class="form-group">
                    <label>Foto</label>
                    <input type="file" class="form-control" name="varImg">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-warning">Submit</button>
                  <a href="<?= base_url("admin/calon") ?>" class="btn btn-primary float-right">Back</a>
                </div>
              </form>
            <?php endforeach ?>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-12 -->
      </div>
      <!-- /.row -->
    </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->