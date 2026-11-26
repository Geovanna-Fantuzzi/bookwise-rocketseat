<?php 

$id = $_REQUEST['id'];

// $livro = $db->livro($id);'

$livro = $db->query(
    query: "select * from livros where id = :id",
    class: Livro::class,
    params: [':id'=> $id]
)->fetch();

// dd($livro);

view('livro', compact('livro'));
