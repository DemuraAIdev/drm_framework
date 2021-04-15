<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <?php

            use Drm\Core\flasher;

            flasher::flash();
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary tomboltambah" data-toggle="modal" data-target="#formmodal">
                Tambah user
            </button>
            <br>
            <br>
            <h3>Daftar Absen</h3>
            <ul class="list-group">
                <?php foreach ($data['abs'] as $abs) : ?>
                <li class="list-group-item ">
                    <?= $abs['nama']; ?>
                    <a href="<?= BASEURL; ?>absen/hapus/<?= $abs['id'] ?>" class="badge badge-danger float-right ml-1"
                        onclick="return confirm('yakin?')">Hapus</a>
                    <a href="<?= BASEURL; ?>absen/ubah/<?= $abs['id'] ?>"
                        class="badge badge-success float-right ml-1 tampilmodaledit" data-toggle="modal"
                        data-target="#formmodal">Edit</a>
                    <a href="<?= BASEURL; ?>absen/detail/<?= $abs['id'] ?>"
                        class="badge badge-primary float-right ml-1">Detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formmodal" tabindex="-1" role="dialog" aria-labelledby="judulmodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulmodal">Tambah Data user</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/absen/tambah" method="post">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Agus" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="nama">No absen</label>
                        <input type="number" class="form-control" id="no" placeholder="100" name="no">
                    </div>
                    <div class="form-group">
                        <label for="nama">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="email" name="email">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah data</button>
                </form>
            </div>
        </div>
    </div>
</div>