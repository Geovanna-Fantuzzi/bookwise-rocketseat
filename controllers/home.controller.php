<?php

$db = new DB();

$pesquisa = (isset($_REQUEST['pesquisa'])) ? $_REQUEST['pesquisa'] : '';

$livros = $db->livros($pesquisa);

view('home', compact('livros'));
