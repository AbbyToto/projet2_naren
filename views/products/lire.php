<main>
    <section>
        <h1>Detail Produit</h1>

        <form method="post">

            <div>
                <img src=<?= $data['product']['url_img']  ?> width="100" height="100" alt="" disabled>
            </div>
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom" value="<?= $data['product']['name'] ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="prixU" class="form-label">Prix Unitaire</label>
                <input type="number" value="<?= $data['product']['price']  ?>" class="form-control" name="prixU" min=0 disabled>
            </div>
            <div class="mb-3">
                <label for="quantite" class="form-label">Quantite</label>
                <input type="number" value="<?= $data['product']['qtty']  ?>" class="form-control" name="quantite" min=0 disabled>
            </div>
            <!-- <div class="mb-3">
                <label for="quantiteDemander" class="form-label">Quantite Demander</label>
                <input type="number" placeholder="Entrez votre quantite" class="form-control" name="quantiteDemander"
                    min=0 max=<?php echo $cosmetic['quantite']; ?>>
            </div> -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" rows="3" disabled><?= $data['product']['description']  ?></textarea>
            </div>
            <div class="mb-3">
                <input type="submit" name="ajoutPanier" value="Ajouter au Panier" class="btn btn-success">
                <input type="submit" name="acheter" value="Acheter le produit" class="btn btn-success">
            </div>
        </form>
    </section>
</main>