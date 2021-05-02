<?php

namespace Drm\Core\classes;

class form
{

    public static function start($action, $method, $attr = null)
    {
        echo '<div class="modal-body">
                    <form action="' . BASEURL . $action . '" method="' . $method . '"' . html::buildTag($attr) . '>';
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

    public static function input($field, $value = null, $attr = null)
    {
        echo '<input type="text" class="form-control" value="' . $value . '" id="', $field, '" name="' . $field . '"' . html::buildTag($attr) . '>';
    }

    public static function password($field, $value = null, $attr = null)
    {
        echo '<input type="password" class="form-control" value="' . $value . '" id="', $field, '" name="' . $field . '"' . html::buildTag($attr) . '>';
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