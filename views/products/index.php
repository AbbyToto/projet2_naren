<main>
    <section>
        <h1>BEST SELLERS</h1>

        <div>
            <?php
            foreach ($listProducts as $product) {
            ?>
            <div>
                <img src="<?= ROOTDOMAINE . $product['url_img']; ?>">
                <h3><a href="lire/<?= $product['id']; ?>"><?= $product['name'] ?></a></h3>

                <p class="legende">
                    <?php echo $product['name'] . ' <br> ' . $product['description'] . '<br>' . '$' . $product['price'] . ' CAD'; ?>
                <form method="get">
                    <input type="hidden" name="id" value="<?= $product['id']; ?>">
                    <p class="legende" name="qtty">En Stock : <?php echo $product['qtty'] . ' <br> '; ?></p>
                    <a type="submit" name="ajoutPanier" class="btn btn-success"
                        href="<?= ROOTDOMAINE . "Paniers/ajouterPanier/" . $product['id']; ?>">Ajouter au Panier</a>

                </form>
            </div>
            <?php } ?>


        </div>

    </section>

</main>

</body>

</html>