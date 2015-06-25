<?php

/**
 * Created by PhpStorm.
 * User: ss0snaa
 * Date: 16.06.2015
 * Time: 16:41
 */
class View
{
    public $layout_view; // здесь можно указать общий вид по умолчанию.

    function render($content, $layout, $data = null, $title)
    {
        if (is_array($data)) {
            // преобразуем элементы массива в переменные
            extract($data);
        }

        require_once LAYOUT_PATH . $layout . '_layout.php';
    }
}