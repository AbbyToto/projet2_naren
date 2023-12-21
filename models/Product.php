<?php


class Product extends Crud
{

    public function __construct()
    {
        $this->getConnection();
        $this->table = "Product";
    }

    public function save($data)
    {
        unset($data['enregistre']);

        $this->_sql = "insert into " . $this->table . "(name,
        description,price,qtty,url_img) values(:name,
        :description,:price,:qtty,:url_img)";
        // $st = $this->_connexion->prepare($sql);
        // $st->BindParam(":name", $data['name']);
        // $st->BindParam(":description", $data['description']);
        // $st->BindParam(":price", $data['price']);
        // $st->BindParam(":qtty", $data['qtty']);
        // $st->BindParam(":url_img", $data['url_img']);
        // $resultat = $st->execute();
        // return $resultat;
        return $this->getLines($data);
    }
}
