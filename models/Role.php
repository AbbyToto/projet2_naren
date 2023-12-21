<?php
class Role extends Crud
{
    const ADMIN = "admin";
    const CLIENT = "client";
    public function __construct()
    {
        $this->table = "role";
        $this->getConnection();
    }
    private $_nom;
    private $_id;
    public function getNom()
    {
        return $this->_nom;
    }
    public function setNom($nom)
    {
        if (!isset($nom) || empty($nom)) {
            $this->_erreurs["name"] = $nom;
            return false;
        }

        $this->_nom = $nom;
    }
    public function getId()
    {
        return $this->_id;
    }
    public function getIdByNom()
    {
        $this->_estUneLigne = true;
        $this->_sql = "SELECT id FROM " . $this->table . " WHERE name= :name";
        $data["name"] = $this->_nom;

        return $this->getLines($data);
    }
}
