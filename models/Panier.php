<?php
class Panier
{
    // public function modifPanier()
    // {
    // }
    const PANIER = "panier";
    public function __construct()
    {
        if (!isset($_SESSION[SELF::PANIER])) {
            $_SESSION[SELF::PANIER] = [];
        }
    }
    public function ajoutPanier($product_id, $qtty)
    {
        $_SESSION[SELF::PANIER][$product_id] = $qtty;
        return true;
    }
    public function supprimPanier($product_id)
    {
        unset($_SESSION[SELF::PANIER][$product_id]);
        return true;
    }
    public function listPanier()
    {
        return $_SESSION[SELF::PANIER];
    }
    public function countPanier()
    {
        return count($_SESSION["panier"]);
    }
}
