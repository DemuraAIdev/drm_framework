<?php

namespace Drm\Core\classes;

class form
{
    public static function start($action, $method, $attributs = null)
    {
        echo '<div class="modal-body">
                    <form action="' . BASEURL . $action . '" method="' . $method . '">';
    }

    public static function close($type)
    {
        if ($type == 'form') {
            echo '  </form>
                    </div>';
        }
        if ($type == 'div') {
            echo '</div>';
        }
    }

    public static function label($for, $label)
    {
        echo '<label for="' . $for . '">' . $label . '</label>';
    }

    public static function input($field, $value = null, $attributs = null)
    {
        echo '<input type="text" placeholder="' . $attributs['pleachoder'] . '" class="form-control" value="' . $value . '" id="', $field, '" name="' . $field . '">';
    }

    public static function password($field, $value = null, $attributs = null)
    {
        echo '<input type="password" placeholder="' . $attributs['pleachoder'] . '" class="form-control" value="' . $value . '" id="', $field, '" name="' . $field . '">';
    }

    public static function hidden($field, $value = null)
    {
        echo '<input type="hidden" value="' . $value . '" name="' . $field . '" id="' . $field . '">';
    }

    public static function button($type, $filed, $color = 'primary')
    {
        echo '<button type="' . $type . '" class="btn btn-' . $color . '" id=' . $filed . ' name=' . $filed . '>' . $filed . '</button>';
    }
}