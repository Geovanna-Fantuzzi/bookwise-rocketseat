<?php

function view($view, $data = [])
{
    require "views/template/app.php";
}

function dd(...$dump)
{

    echo '<pre>';
    var_dump($dump);
    echo '</pre>';
    if ($dump == false) {
        die();
    }
}

function abort($status)
{

    http_response_code($status);

    view($status);

    die();
}
