<?php

use Drm\Core\classes\form;

?>
<div class="container mt-5">
    <div class="row mb-3">
        <div class="col-lg-6">
            <?php
            echo form::start('/home/contoh1', 'post'); ?>
            <div class="form-group">
                <?php
                echo form::label('contohinput1', 'Nama :');
                echo form::input('contohinput1', '', array('pleachoder' => 'Nama'));
                ?>
            </div>
            <?php
            echo form::button('submit', 'submit');
            echo form::close('form');
            ?>

        </div>
    </div>
</div>