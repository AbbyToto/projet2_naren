<?php

$panier = new Panier();

function getDateAc()
{
    return $date_commande = date("Y-m-d h:m:s");
}
echo getDateAc();

$totals = 0;
$product = new Product();

if (isset($_POST['modifierPanier'])) {

    $id = $_POST['product_id'];
    $quantiteDemander = $_POST['quantiteDemander'];
    $panier->ajoutPanier($id, $quantiteDemander);
}

?>

<main>
    <section>
        <h1>Mon Panier</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prix Unitaire</th>
                    <th scope="col">Description</th>
                    <th scope="col">Quantiter Demander</th>
                    <th scope="col">Total</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($listPanier as $idProduct => $quantiteDemander) {
                    $product->getOneById($idProduct);
                ?>

                    <form method="post">
                        <tr>
                            <th scope="row"><input type="hidden" name="product_id" value="<?php echo $idProduct; ?>">
                            </th>
                            <td><?php echo $product['name']; ?></td>
                            <td><?php echo $product['price']; ?></td>
                            <td><?php echo $product['description']; ?></td>

                            <td><input min="1" max="<?php echo $product['qtty']; ?>" type="number" value="<?= $panier['qtty'] ?>" name="quantiteDemander"></td>

                            <td>
                                <button type="submit" class="btn btn-info" name="modifierPanier">
                                    <i class="bi bi-pencil-square">
                                    </i>
                                </button>
                                <a href="supprime/id=<?= $panier['product_id']; ?>" class="btn btn-danger">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                    </form>
                <?php } ?>


            </tbody>
        </table>
        <div class="col-auto text-end">
            <div class="text-success">
                Totals : <?= $totals; ?>
            </div>
            <form method="post">
                <div>
                    <button class="btn btn-warning" name="payer" type="submit">Payer</button>
                </div>

            </form>

        </div>

        <div id="paypal-payment-button"></div>
    </section>
</main>

<script src="https://www.paypal.com/sdk/js?client-id=ASf2Fkuk311ePN3J_JtLALtd4j7vIPOl55x2Y9EkqFeYnTvYpKwk5cMjsuq_hyszYihDvzD1jZIM75fC&currency=CAD">
</script>
<!-- <script src="./public/paypal.js"></script> -->
<script>
    // Configuration du bouton PayPal
    paypal.Buttons({

        createOrder: function(data, actions) {
            // Cette fonction est appelée lorsque l'utilisateur clique sur le bouton PayPal
            // Elle crée la commande avec le montant spécifié (0,10 dollar dans ce cas)
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '0.10'
                    }
                }]
            })
        },
        onApprove: function(data, actions) {
            // Cette fonction est appelée lorsque l'utilisateur approuve la transaction PayPal
            // Elle capture les fonds de la transaction et redirige vers la page "success.html"
            return actions.order.capture().then(function(details) {
                console.log(details); // Affiche les détails de la transaction dans la console
                window.location.replace("success.html"); // Redirige vers la page "success.html"
            })
        }
    }).render('#paypal-payment-button'); // Affiche le bouton PayPal dans l'élément avec l'ID 'paypal-payment-button'
</script>
<!-- <?php
        // if(isset($_POST['payer'])){
        //     if(isset($_SESSION['user'])){
        //         $id_utilisateur = $_SESSION['user']['id'];
        //         ajoutCommande($totals,$id_utilisateur);
        //     }
        //     else {header("Location : ./sign.php");

        //     }

        // }
        ?> -->