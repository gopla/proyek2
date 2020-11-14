  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Hasil Pemilihan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <div class="row">
                    <?php foreach ($tableDatas as $data) : ?>
                      <div class="col-sm-4">
                        <div class="card">
                          <img class="card-img-top" src="<?= base_url("assets/uploads/calon/$data->foto") ?>" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title"><?= $data->no_urut ?>. <?= $data->nama ?></h5>
                            <p class="card-text"><?= $data->kelas ?></p>
                            <p class="card-text"><?= $data->visimisi ?> </p>
                            <h3>Jumlah: <?= $data->jml_vote ?></h3>
                            <a href="<?= base_url("admin/hasil/show/$data->id_calon") ?>" class="btn btn-primary">
                              <i class="fa fa-eye" aria-hidden="true"></i>
                              <span>Harapan</span>
                            </a>
                          </div>
                        </div>
                      </div>
                    <?php endforeach ?>
              </div>
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