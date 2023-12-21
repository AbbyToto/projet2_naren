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
        $st = $this->_connexion->prepare($this->_sql);
        $st->BindParam(":name", $data['name'], PDO::PARAM_STR);
        $st->BindParam(":description", $data['description'], PDO::PARAM_STR);
        $st->BindParam(":price", $data['price'], PDO::PARAM_INT);
        $st->BindParam(":qtty", $data['qtty'], PDO::PARAM_INT);
        $st->BindParam(":url_img", $data['url_img'], PDO::PARAM_STR);
        $resultat = $st->execute();
        return $resultat;
        //return $this->getLines($data);
    }
}
