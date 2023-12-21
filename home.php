<html>

<style>
    body {
        /* background-image: url(<?php echo $product['url_img']; ?>) */
        background-image: url("./media/p901.jpg")
    }
</style>
<main>
    <section>

        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
            </script>
            <link rel="stylesheet" type="text/css" href="css/style.css?v=1.1">
            <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed&display=swap" rel="stylesheet">

        </head>
        <header>

            <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: 	#003E3E;" ;>
                <div class="container-fluid">
                    <a class="navbar-brand">
                        <img src="media/image/logo.png" alt="logo" style="width: 100px;" class="rounded-pill">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="">Home</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="produit_client.php">List of Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="best_sellers.php">Best Sellers</a>
                            </li>
                            <!-- <li class="nav-item">
                        <a class="nav-link" href="yeux.php">YEUX</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">LÈVRES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">VISAGE</a>
                    </li> -->

                            <!-- <li class="nav-item">
                        <a href="monPanier.php" class="btn btn-dark">
                            <i class="bi bi-cart4"><?php echo $quantite; ?></i> </a>
                    </li> -->
                            <!-- <?php
                                    //if (isset($_SESSION['user'])) {
                                    // $user = $_SESSION['user'];
                                    // $user = getUserById($user['id']);
                                    ?> -->
                            <li class="nav-item">
                                <a href="monCompte.php" class="btn btn-dark">
                                    <i class="bi bi-person-vcard"></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="deconnect.php" class="btn btn-dark">
                                    <i class="bi bi-box-arrow-in-right">

                                    </i></a>
                            </li>
                            <!-- <?php if ($user['role'] === "admin") {

                                        //
                                    ?> -->

                            <li class="nav-item">
                                <a href="gestionUsers.php" class="btn btn-dark">
                                    <i class="bi bi-person-gear"></i> </a>
                            </li>
                            <li class="nav-item">
                                <a href="gestionProduit.php" class="btn btn-dark">
                                    <i class="bi bi-bag"></i> </a>
                            </li>
                            <li class="nav-item">
                                <a href="gestionCommande.php" class="btn btn-dark">
                                    <i class="bi bi-bag-check"></i></a>
                            </li>
                            <!-- <?php   }

                                    //  }  
                                    ?> -->

                            <li class="nav-item">
                                <a href="sign.php" class="btn btn-dark">
                                    <i class="bi bi-person"></i>
                                </a>
                            </li>

                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <a href="gestionUsers.php" class="btn btn-info">
                                <i class="bi bi-search"></i>
                            </a>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
    </section>
</main>
</body>

</html>