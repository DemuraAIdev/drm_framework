<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Absen</h3>
            <?php foreach ($data['abs'] as $abs) : ?>
            <ul>
                <li>Nama : <?php echo $abs['nama']; ?> </li>
                <li>No Absen : <?php echo $abs['no']; ?></li>
                <li>Email : <?php echo $abs['email']; ?></li>
            </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>