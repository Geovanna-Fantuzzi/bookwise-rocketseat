<?php

$db = new DB();

$livros = $db->livros();

$view = 'home';

view($view, compact('livros'));
