  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- general form elements -->
          <!-- Profile Image -->
          <?php foreach ($calonData as $data) : ?>
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="<?= base_url("assets/uploads/calon/$data->foto") ?>" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?= $data->no_urut ?>. <?= $data->nama ?></h3>

                <p class="text-muted text-center"><?= $data->kelas ?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <b>Visi</b>
                  <li class="list-group-item">
                    <?= $data->visi ?>
                  </li>

                  <b>Misi</b>
                  <li class="list-group-item">
                    <?= $data->misi ?>
                  </li>
                </ul>

                <a href="<?= base_url("admin/calon") ?>" class="btn btn-primary btn-block"><b>Back</b></a>
              </div>
            <?php endforeach ?>
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