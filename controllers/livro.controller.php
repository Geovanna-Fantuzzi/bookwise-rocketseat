<?php 

$db = new DB();

$id = $_REQUEST['id'];

$livro = $db->livro($id);

// dd($livro);

view('livro', compact('livro'));
