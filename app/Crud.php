<?php

abstract class Crud
{

    private $host = "localhost";
    private $user = "root";
    private $mdp = "";
    private $port = 3306;
    private $name = "ecom2_project";

    protected $table;
    protected $_connexion;
    protected $_sql;
    protected $_estUneLigne = false;
    protected $_erreurs = [];

    private $stmt;
    public $id;


    public function getConnection()
    {
        $this->_connexion = null;
        try {
            $this->_connexion = new PDO('mysql:host=' . $this->host . ';dbname=' .
                $this->name, $this->user, $this->mdp);
        } catch (PDOException $e) {
            echo "Erreur :" . $e->getMessage();
        }
    }

    public function getLines($params = [])
    {

        // $stmt = $this->_connexion->prepare($this->_sql);
        // foreach($params as $nomParam => $valParam){
        //     $stmt->bindValue(":".$nomParam, $valParam);
        //   }
        //$stmt->execute();
        if (!$this->estExecute($params)) {
            return false;
        }
        return $this->_estUneLigne ? $this->stmt->fetch(PDO::FETCH_ASSOC) :
            $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function estExecute($params = [])
    {

        $this->stmt = $this->_connexion->prepare($this->_sql);
        foreach ($params as $nomParam => $valParam) {
            $this->stmt->bindValue(":" . $nomParam, $valParam);
        }
        return $this->stmt->execute();
    }

    public function getOneById()
    {
        $sql = "SELECT * from " . $this->table . ' where id = :id';
        $stmt = $this->_connexion->prepare($sql);
        $stmt->BindParam(":id", $this->id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    public function getAll()
    {
        $sql = "SELECT * from " . $this->table;
        $stmt = $this->_connexion->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        // $this->_sql  = "SELECT * from " . $this->table;
        // return $this->getLignes();
    }


    public function testData($data)
    {
        foreach ($data as $key => $value) {
            if (empty($value)) {
                $this->_erreurs[$key] = "Le champs " . $key . " est vide";
            }
        }
        return $this->_erreurs;
    }


    public function delete()
    {
        $element = $this->getOneById();
        if ($element) {
            $stmt = $this->_connexion->prepare("DELETE FROM" . $this->table . " WHERE id = :id");
            $stmt->BindParam(':id', $this->id, PDO::PARAM_INT);
            $stmt->execute();
            return "L'élément avec l'id " . $this->id . " a été supprimée.";
        } else {
            return "Élément introuvable";
        }
    }
}
