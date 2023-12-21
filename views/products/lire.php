<main>
    <section>
        <h1>Detail de Produit</h1>

        <form method="post">

            <div>
                <img src=<?= ROOTDOMAINE . $product['url_img']; ?>>
            </div>
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" name="name" value="<?= $product['name'] ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="prixU" class="form-label">Prix Unitaire</label>
                <input type="number" value="<?= $product['price']  ?>" class="form-control" name="price" min=0 disabled>
            </div>
            <div class="mb-3">
                <label for="quantite" class="form-label">Quantite</label>
                <input type="number" value="<?= $product['qtty']  ?>" class="form-control" name="qtty" min=0 disabled>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" rows="3" value="<?= $product['description']  ?>" disabled></textarea>
            </div>
            <div class="mb-3">
                <input type="submit" name="ajoutPanier" value="Ajouter au Panier" class="btn btn-success">
                <input type="submit" name="acheter" value="Acheter le produit" class="btn btn-success">
            </div>
        </form>
    </section>
</main>