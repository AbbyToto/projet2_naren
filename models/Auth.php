<?php
class Auth extends Crud
{

    public function __construct()
    {
        $this->table = "user";
        $this->getConnection();
    }
    public function register($data)
    {
        $error = $this->testData($data);
        if (count($error)) {
            return false;
        }

        $this->_estUneLigne = true;

        $this->_sql = "INSERT INTO " . $this->table . "(username,fname, lname,email,pwd,role_id)
                       VALUES(:username,:fname, :lname,:email,:pwd,:role_id)";

        return $this->line($data);
    }

    public function verifierMdp($mdp, $cmdp)
    {
        return $mdp === $cmdp;
    }

    public function isAdmin($id, $role_id)
    {
        if ($this->getUserSession()) {
            return $_SESSION[$this->table]["nomRole"] === Role::ADMIN;
        }
        return false;

        return $id = $role_id;
    }

    public function sessionSave($utilisateur)
    {
        $_SESSION[$this->table] = $utilisateur;
    }

    public function deconnexion()
    {
        unset($_SESSION[$this->table]);
    }

    public function getUserSession()
    {
        if (isset($_SESSION[$this->table])) {
            return $_SESSION[$this->table];
        }
        return false;
    }

    public function verifierEmail($email)
    {
        $this->_estUneLigne = true;
        $this->_sql = "SELECT user.*,role.name AS nomRole FROM " . $this->table . " JOIN role On " . $this->table . ".role_id = role.id where email= :email";

        return $this->getLines($email);
    }
}
