  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- general form elements -->
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Add New Calon</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <?= form_open_multipart('admin/calon/add') ?>
            <form role="form" method="POST" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <label>No. Urut</label>
                  <input type="text" class="form-control" placeholder="Nomor urut" name="varNoUrut">
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" placeholder="Nama calon" name="varNama">
                </div>
                <div class="form-group">
                  <label>Kelas</label>
                  <input type="text" class="form-control" placeholder="Kelas" name="varKelas">
                </div>
                <div class="form-group">
                  <label>Visi & Misi</label>
                  <textarea name="varVisiMisi" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                  <label>Foto</label>
                  <input type="file" class="form-control" name="varImg">
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="<?= base_url("admin/calon") ?>" class="btn btn-primary float-right">Back</a>
              </div>
            </form>
            <?= form_close() ?>
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