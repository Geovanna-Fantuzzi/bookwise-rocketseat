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

        $data = [];

        $sql = "select * from livros where titulo like :pesquisa";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':pesquisa', '%' . $pesquisa . '%');
        $sql->execute();

        $items = $sql->fetchAll();

        /*  Outra forma de se fazer o mesmo que o foreach:
            return array_map(fn($item) => Livro::make($item), $items); 
            No entanto, o foreach é muito mais legível.
        */

        foreach ($items as $item) {

            $data[] = Livro::make($item);
        }

        return $data;
    }

    public function livro($id)
    {

        $sql = "select * from livros where id = :id";

        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();
        $item = $sql->fetch();

        $livro = Livro::make($item);

        return $livro;
    }
}
