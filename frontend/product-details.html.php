<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <!-- Header content, navigation, etc. -->
    </header>

    <main>
        <div class="content-wrapper">
            <div class="product-details">
                <div class="img">
                    <img src="imgs/<?php echo $product['img']; ?>" alt="<?php echo $product['name']; ?>">
                </div>
                <div class="info">
                    <h1><?php echo $product['name']; ?></h1>
                    <p class="price"><?php echo '$' . number_format($product['price'], 2); ?></p>
                    <p class="rrp">RRP: <?php echo '$' . number_format($product['rrp'], 2); ?></p>
                    <p class="description"><?php echo htmlspecialchars($product['desc']); ?></p>
                    <form action="add-to-cart.php" method="post">
                        <input type="number" name="quantity" value="1" min="1" max="<?php echo $product['quantity']; ?>">
                        <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                        <input type="submit" value="Add to Cart">
                    </form>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <!-- Footer content, etc. -->
    </footer>
</body>
</html>