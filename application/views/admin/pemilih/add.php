  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- general form elements -->
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Add New Pemilih</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <?= form_open_multipart("admin/pemilih/importExcel" )?>
            <form role="form" method="POST">
              <div class="card-body">
                <div class="form-group">
                  <label>Generate Pemilih sebanyak</label>
                  <input type="file" class="form-control" placeholder="Jumlah pemilih" name="varPemilih" required> 
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="<?= base_url("admin/pemilih") ?>" class="btn btn-primary float-right">Back</a>
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