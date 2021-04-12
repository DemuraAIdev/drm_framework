<div class="containe mt-5">
    <div class="col-6">
        <div class=" card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $data['abs']['nama']; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $data['abs']['no']; ?></h6>
                <p class="card-text"><?= $data['abs']['email']; ?></p>
                <a href="<?= BASEURL; ?>absen/" class="card-link">Kembali</a>
            </div>
        </div>
    </div>
</div>