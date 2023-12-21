<?php

class Products extends Controller
{

    public function index()
    {

        $this->loadModel("Product");
        $listProducts = $this->Product->getAll();
        $this->render('index', compact("listProducts"));
    }

    public function lire($id)
    {
        $this->loadModel("Product");
        $this->Product->id = $id;
        $product = $this->Product->getOneById();
        $this->render('lire', compact('product'));
    }

    public function ajout()
    {

        $this->loadModel("Product");

        if (isset($_POST['enregistre'])) {

            $errors = $this->Product->testData($_POST);

            if (count($errors) > 0) {
                $this->render('ajout', $errors);
                return;
            } else {
                $this->Product->save($_POST);
                $this->index();
            }
        }
        $this->render('ajout');
    }
}
