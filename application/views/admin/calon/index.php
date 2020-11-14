  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Calon</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <?php if ($this->session->flashdata('delete') == TRUE) : ?>
                <div class="alert alert-danger alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <?php echo $this->session->flashdata('delete'); ?>
                </div>
              <?php endif; ?>
              <?php if ($this->session->flashdata('add') == TRUE) : ?>
                <div class="alert alert-success alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <?php echo $this->session->flashdata('add'); ?>
                </div>
              <?php endif; ?>
              <?php if ($this->session->flashdata('edit') == TRUE) : ?>
                <div class="alert alert-warning alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <?php echo $this->session->flashdata('edit'); ?>
                </div>
              <?php endif; ?>
              <a href="<?= base_url("admin/calon/add") ?>" class="btn btn-success">
                <i class="fa fa-plus" aria-hidden="true"></i>
                <span>Add Data</span>
              </a>
              <br><br>
              <table id="table" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th style="width:10%;">No</th>
                    <th style="width:10%;">No Urut</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th style="width:20%;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($tableDatas as $data) : ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $data->no_urut ?></td>
                      <td><?= $data->nama ?></td>
                      <td><?= $data->kelas ?></td>
                      <td>
                        <a href="<?= base_url("admin/calon/show/$data->id_calon") ?>" class="btn btn-primary">
                          <i class='fas fa-eye'></i>
                        </a>
                        <a href="<?= base_url("admin/calon/delete/$data->id_calon") ?>" class="btn btn-danger" onclick="return confirm('Sure to delete data?')">
                          <i class='fas fa-trash'></i>
                        </a>
                        <a href="<?= base_url("admin/calon/edit/$data->id_calon") ?>" class="btn btn-warning">
                          <i class='fas fa-edit'></i>
                        </a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
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