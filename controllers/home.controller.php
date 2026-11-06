<?php

require 'dados.php';

$data = [
    'livros' => $livros
];

$view = 'home';

view($view, $data);
