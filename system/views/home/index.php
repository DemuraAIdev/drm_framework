<?php

use Drm\Core\basecore;
use Drm\Core\classes\Dates;
use Drm\Core\DRM;

?>

<div class="container mt-5">
    <div class="row">
        <div class="container-fluid">
            <div class="jumbotron">
                <h1 class="display-4">Welcome</h1>
                <p class="lead">DRM_FRM is a mini php framework to create a mini website</p>
                <p></p>
                <hr class="my-4">
                <p></p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>

            </div>
        </div>

        <div class="col-sm mt-4">
            <h3>Get Started</h3>
            <p>The controller generating this page is found at <code>system/controller/home.php.</code>
                This view can be found at <code>system/views/home/index.php.</code>
                You can modify these files to get your application started quickly.</p>
        </div>
        <div class="col-sm mt-4">
            <h3>System MVC</h3>
            <p>Model-View-Controller atau MVC adalah sebuah metode untuk membuat sebuah aplikasi dengan memisahkan data
                dari tampilan dan cara bagaimana memprosesnya. Dalam implementasinya kebanyakan kerangka kerja dalam
                aplikasi web adalah berbasis arsitektur MVC.</p>
        </div>
        <div class="col-sm mt-4">
            <h3>Directory</h3>
            <p><b>system</b><code> drm_frm/system/</code></p>
            <p><b>Core</b><code> drm_frm/system/core/</code></p>
            <p><b>Config</b><code> drm_frm/system/config/config.php</code></p>
            <p><b>View</b><code> drm_frm/system/view/</code></p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="jumbotron">
            <h1 class="display-4" align="center">CSS</h1>
            <p align="center">
                <img src="<?php BASEURL ?>images/fontawasome.png" alt="fontawasome" width="100px" height="100px">
                <img src="<?php BASEURL ?>images/boot.png" alt="fontawasome" width="100px" height="100px">
            </p>
        </div>
    </div>
    <small class="float-right">Version <?php echo DRM::version('Drm') ?></small>
    <small><?php echo dates::showtime('Y-m-d', 'America/New_York') ?></small>
</div>