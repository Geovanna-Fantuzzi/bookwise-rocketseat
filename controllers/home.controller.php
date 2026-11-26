<?php

$pesquisa = (isset($_REQUEST['pesquisa'])) ? $_REQUEST['pesquisa'] : '';

// $livros = $db->livros($pesquisa);

$livros = $db->query(
    query: "select * from livros where titulo like :filtro",
    class: Livro::class,
    params: [':filtro'=> "%" . $pesquisa . "%"]
)->fetchAll();

view('home', compact('livros'));
