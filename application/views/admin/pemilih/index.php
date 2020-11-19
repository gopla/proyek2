  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Pemilih</h3>
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
              <a href="<?= base_url("admin/pemilih/add") ?>" class="btn btn-success">
                <i class="fa fa-plus" aria-hidden="true"></i>
                <span>Add Data</span>
              </a>
              <br><br>
              <table id="table" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th style="width:10%;">No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Pin</th>
                    <th style="width:15%;">Status Memilih</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($tableDatas as $data) : ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $data->nama ?></td>
                      <td><?= $data->email ?></td>
                      <td><?= $data->pin ?></td>
                      <td>
                        <?= $data->isVote == 'Y' ? '<span class="badge badge-success">Sudah Memilih</span>' : '<span class="badge badge-danger">Belum Memilih</span>' ?>
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