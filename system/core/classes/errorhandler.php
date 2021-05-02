<?php

/**
 * Error handler Class
 *
 * @package		Drm
 * @subpackage	Core
 * @category	classes
 * @author		Drm
 */

namespace Drm\Core\classes;

class errorhandler
{
    public static function notif($message)
    {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        ' . $message . '
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
    }
}