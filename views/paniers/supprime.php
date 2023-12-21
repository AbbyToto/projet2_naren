<?php
$panier = new Panier();
if (isset($_GET['product_id'])) {
    $id = $_GET['product_id'];
    $panier->supprimPanier($product_id);
}
