<?php

/**
 * DRM is Mini  Framwork PHP
 *
 * @package    Drm
 * @version    1.0.2
 * @author     Drm Developer
 * @license    MIT License
 * @copyright  2021 Drm TEAM
 */

namespace Drm\Core\classes;

class flasher
{

    public static function setflash($title, $pesan, $aksi, $type)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'type' => $type,
            'title' => $title
        ];
    }
    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo '<div class="alert alert-' . $_SESSION['flash']['type'] . ' alert-dismissible fade show" role="alert">
                        ' . $_SESSION['flash']['title'] . '<strong>' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] . '
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
            unset($_SESSION['flash']);
        }
    }
}