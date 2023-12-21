<main>
    <section>
        <h1>BEST SELLERS</h1>

        <div>
            <?php
            foreach ($data as $product) {
            ?>

                <div>
                    <a href="lire/<?= $product['id']; ?>"><?= $product['name'] ?></a>

                    <img src=<?php echo $product['url_img']; ?> id="img" alt="">
                    </a>
                    <p class="legende">
                        <?php echo $product['name'] . ' <br> ' . $product['description'] . '<br>' . '$' . $product['price'] . ' CAD'; ?>
                    <form method="post" action=<?= ROOTDOMAINE . "Paniers/ajouterPanier" ?>>
                        <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                        <input type="number" class="legende" style="width: 800px;" name="quantiteDemander" min=0 max=<?php echo $product['qtty'] . ' <br> '; ?>>
                        <input type="submit" name="ajoutPanier" value="Ajouter au Panier" style="width: 800px;" class="btn btn-success">

                    </form>
                </div>
            <?php } ?>


        </div>

    </section>

</main>

</body>

</html>