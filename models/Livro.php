<?php 

class Livro {
    public $id;

    public $titulo;

    public $autor;

    public $descricao;

    public $imagem;

    public static function make($item) {
        $livro = new self();

        $livro->id = $item['id'];
        $livro->titulo = $item['titulo'];
        $livro->autor = $item['autor'];
        $livro->descricao = $item['descricao'];
        $livro->imagem = $item['imagem'];

        return $livro;
    }
}