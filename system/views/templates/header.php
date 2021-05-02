<!DOCTYPE html>
<html lang="en">
<?php

use Drm\Core\classes\Asset;

?>

<head>
    <meta charset="UTF-8">
    <title>DRM <?= $data['judul']; ?></title>
    <link rel="shortcut icon" href="<?php BASEURL ?> images/icon.ico">
    <?= Asset::css('bootstrap.css', array()) ?>
    <?= Asset::fontawesome() ?>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-bottom">
        <a class="navbar-brand" href="<?= BASEURL; ?>">DRM FRM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo BASEURL; ?>absen">exampleAbsen</a>
                </li>
            </ul>
        </div>
    </nav>