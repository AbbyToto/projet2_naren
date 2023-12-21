<main>
    <section>
        <h1>Gestion Produit</h1>
        <div class="mb-3">
            <a href="ajoutProduit.php" class="btn btn-success">Ajouter un nouveau Produit</a>
        </div>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prix Unitaire</th>
                    <th scope="col">Quantite</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cosmetics as $cosmetic) {?>
                <tr>
                    <th scope="row"><?php echo $cosmetic['id']; ?></th>
                    <th scope="row"><img src="<?php echo $cosmetic['chemin']; ?>" width="100" height="100" alt=""></th>
                    <td><?php echo $cosmetic['nom']; ?></td>
                    <td><?php echo $cosmetic['prixUnitaire']; ?></td>
                    <td><?php echo $cosmetic['quantite']; ?></td>
                    <td><?php echo $cosmetic['description']; ?></td>
                    <td>
                        <a href="modifierProduit.php?id=<?php echo $cosmetic['id']; ?>" class="btn btn-info">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <a href="supprimerProduit.php?id=<?php echo $cosmetic['id']; ?>" class="btn btn-danger">
                            <i class="bi bi-trash"></i>
                        </a>
                    </td>
                </tr>

                <?php } ?>

            </tbody>
        </table>
    </section>
</main>