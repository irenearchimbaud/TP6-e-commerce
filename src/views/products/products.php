<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notre Collection - Sneakers</title>
    <link href="../../assets/css/products.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/navbar.css">
    <link rel="stylesheet" href="../../assets/css/footer.css">
<body>

    <?php 
        include_once("../../assets/models/navbar.php")
    ?>

    <main class="products-grid">
        <article class="product-card">
            <div class="product-image">
                <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff" alt="Nike Air Max">
                <span class="discount-badge">-19%</span>
            </div>
            <div class="product-info">
                <h2>Nike Air Max 2023</h2>
                <p class="product-category">Chaussures de Sport</p>
                <div class="product-price">
                    <span class="current-price">129.99 €</span>
                    <span class="original-price">159.99 €</span>
                </div>
                <button class="add-to-cart">Ajouter au panier</button>
            </div>
        </article>

        <article class="product-card">
            <div class="product-image">
                <img src="https://images.unsplash.com/photo-1551107696-a4b0c5a0d9a2" alt="Adidas Ultraboost">
            </div>
            <div class="product-info">
                <h2>New Balance</h2>
                <p class="product-category">Running</p>
                <div class="product-price">
                    <span class="current-price">159.99 €</span>
                </div>
                <button class="add-to-cart">Ajouter au panier</button>
            </div>
        </article>

        <article class="product-card">
            <div class="product-image">
                <img src="https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a" alt="Puma RS-X">
                <span class="discount-badge">-25%</span>
            </div>
            <div class="product-info">
                <h2>Air force</h2>
                <p class="product-category">Sneakers</p>
                <div class="product-price">
                    <span class="current-price">89.99 €</span>
                    <span class="original-price">119.99 €</span>
                </div>
                <button class="add-to-cart">Ajouter au panier</button>
            </div>
        </article>

        <article class="product-card">
            <div class="product-image">
                <img src="https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa" alt="Nike Zoom">
            </div>
            <div class="product-info">
                <h2>Nike Zoom</h2>
                <p class="product-category">Running</p>
                <div class="product-price">
                    <span class="current-price">139.99 €</span>
                </div>
                <button class="add-to-cart">Ajouter au panier</button>
            </div>
        </article>

        <article class="product-card">
            <div class="product-image">
                <img src="https://images.unsplash.com/photo-1605348532760-6753d2c43329" alt="Adidas NMD">
                <span class="discount-badge">-15%</span>
            </div>
            <div class="product-info">
                <h2>Nike NMD</h2>
                <p class="product-category">Lifestyle</p>
                <div class="product-price">
                    <span class="current-price">119.99 €</span>
                    <span class="original-price">139.99 €</span>
                </div>
                <button class="add-to-cart">Ajouter au panier</button>
            </div>
        </article>

        <article class="product-card">
            <div class="product-image">
                <img src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519" alt="New Balance 574">
            </div>
            <div class="product-info">
                <h2>Air Max</h2>
                <p class="product-category">Casual</p>
                <div class="product-price">
                    <span class="current-price">99.99 €</span>
                </div>
                <button class="add-to-cart">Ajouter au panier</button>
            </div>
        </article>
    </main>

    <?php 
        include_once("../../assets/models/footer.php")
    ?>
</body>

</html>