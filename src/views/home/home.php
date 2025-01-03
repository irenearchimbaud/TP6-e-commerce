<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Nouveautés</title>
    <link rel="stylesheet" href="../../assets/css/HomeStyles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/navbar.css">
    <link rel="stylesheet" href="../../assets/css/footer.css">
</head>
<body>

    <?php 
        include_once("../../assets/models/navbar.php")
    ?>

    <div class="hero-section">
        <div class="hero-content">
            <h1>Collection Exclusive</h1>
            <p>Style. Confort. Performance.</p>
            <button class="produit-Bouton">Voir Produits</button>
        </div>
    </div>

    <div class="product-section">
        <h2>Nouveautés</h2>
        <div class="product-gallery">
            <div class="product-card">
                <img src="../../assets/images/NIKE+DUNK+LOW+RETRO.png" alt="Produit 1">
                <p>Nouvelle Tendance</p>
            </div>
            <div class="product-card">
                <img src="../../assets/images/NIKE+AIR+MAX+PLUS.png" alt="Produit 2">
                <p>Sport & Mode</p>
            </div>
            <div class="product-card">
                <img src="../../assets/images/custom-nike-dunk-low-by-you-su24.png" alt="Produit 3">
                <p>Édition Limitée</p>
            </div>
        </div>
    </div>

    <?php 
        include_once("../../assets/models/footer.php")
    ?>

</body>
</html>