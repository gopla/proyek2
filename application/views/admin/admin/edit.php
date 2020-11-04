  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
         <!-- general form elements -->
         <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Admin</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php foreach($adminData as $data): ?>
              <form role="form" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="Enter username" name="varUname" value="<?= $data->username ?>">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Enter password" name="varPass">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-warning">Submit</button>
                  <a href="<?= base_url("admin/admin") ?>" class="btn btn-primary float-right">Back</a>
                </div>
              </form>
              <?php endforeach?>
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