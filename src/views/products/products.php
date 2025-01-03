<?php
require '../../assets/models/pdo.php';

try {
    $pdo = getPDO();
    $stmt = $pdo->query("SELECT * FROM products");
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erreur lors de la récupération des produits : " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notre Collection - Sneakers</title>
    <link href="../../assets/css/products.css" rel="stylesheet">
</head>

<body>
    <header class="site-header">
        <h1>Notre Collection de Sneakers</h1>
    </header>

    <main class="products-grid">
        <?php foreach ($products as $product): ?>
            <article class="product-card">
                <div class="product-image">
                    <img src="../../assets/images/custom-nike-dunk-low-by-you-su24.png" alt="<?php echo htmlspecialchars($product['name']); ?>">
                </div>
                <div class="product-info">
                    <h2><?php echo htmlspecialchars($product['name']); ?></h2>
                    <p class="product-category">Modèle : <?php echo htmlspecialchars($product['modele']); ?></p>
                    <p class="product-description"><?php echo htmlspecialchars($product['description']); ?></p>
                    <p class="product-size">Pointure : <?php echo htmlspecialchars($product['pointure']); ?></p>
                    <div class="product-price">
                        <span class="current-price">XXX.XX€</span>
                    </div>
                    <button class="add-to-cart">Ajouter au panier</button>
                </div>
            </article>
        <?php endforeach; ?>
    </main>
</body>

</html>
