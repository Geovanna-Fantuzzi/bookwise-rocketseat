<?php

class DB
{

    private $db;

    public function __construct()
    {
        $this->db = new PDO('sqlite:database.sqlite');
    }

    public function livros($pesquisa = '')
    {
        $sql = "select * from livros where titulo like :pesquisa";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':pesquisa', '%' . $pesquisa . '%');
        $sql->setFetchMode(PDO::FETCH_CLASS, Livro::class); //Devolve um objeto em vez de array
        $sql->execute();

        return $sql->fetchAll();
    }

    public function livro($id)
    {
        $sql = "select * from livros where id = :id";

        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->setFetchMode(PDO::FETCH_CLASS, Livro::class);
        $sql->execute();

        return $sql->fetch();
    }
}
