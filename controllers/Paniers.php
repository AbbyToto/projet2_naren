<?php

class Paniers extends Controller
{

    public function index()
    {
        $panier = new Panier();
        $listPaniers = $panier->listPanier();
        $this->render("index", compact("listPaniers"));
    }

    public function ajouterPanier($param)
    {
        $panier = new Panier();
        $panier->ajoutPanier($param, 1);
        header("Location:" . ROOTDOMAINE . "panier/index");
    }
}
