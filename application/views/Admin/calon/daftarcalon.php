<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Daftar Calon</h1>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>No. Urut</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Visi Misi</th>
                                                <th>Foto</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach($calon as $cln): ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $cln->nama ?></td>
                                                <td>
                                                    <a class='btn btn-danger' href="<?= base_url().'Calon/delete/'.$cln->id_calon ?>">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                    </a>
                                                    <a class='btn btn-warning' href="<?= base_url().'Calon/put/'.$cln->id_calon ?>">
                                                        <i class="fas fa-edit" aria-hidden="true"></i>
                                                    </a>
                                                    <a class='btn btn-info' href='<?= base_url().'Calon/detail/'.$cln->id_calon ?>' class='btn btn-biru'>
                                                        <i class="fas fa-eye" aria-hidden="true"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>

                    </div>
                </main>
            
            
        </div>
    </main>
</div>
