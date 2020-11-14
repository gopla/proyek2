  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <?php foreach($namaCalon as $calon): ?>
                <h3 class="card-title">Harapan untuk <?= $calon->nama ?></h3>
              <?php endforeach ?>
              
              <a href="<?= base_url("admin/hasil") ?>" class="btn btn-primary float-right">
                <i class="fas fa-arrow-left    "></i>
                <span>Back</span>
              </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="table" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th style="width:10%;">No</th>
                    <th>Harapan</th>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($tableDatas as $data) : ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $data->harapan ?></td>
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