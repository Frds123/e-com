<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Summary</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <!-- Header content, such as logo, navigation, etc. -->
    </header>

    <main>
        <div class="content-wrapper">
            <h1>Order Summary</h1>
            <div class="order-summary">
                <!-- Fetch and display order details from the session or database. -->
                <!-- For example, display product name, quantity, and price. -->
            </div>
            <div class="order-total">
                <h2>Total: $<span id="order-total">0.00</span></h2>
            </div>
            <div class="buttons">
                <a href="cart.php">Edit Cart</a>
                <a href="checkout.php">Proceed to Checkout</a>
            </div>
        </div>
    </main>

    <footer>
        <!-- Footer content, such as copyright, contact information, etc. -->
    </footer>

    <!-- Include any necessary JavaScript files here -->
</body>
</html>

<?php
// Calculate the order total and store it in a session variable
session_start();

// Assuming you have an associative array `$order` containing order details
$order_total = 0;
foreach ($order as $item) {
    $order_total += $item['price'] * $item['quantity'];
}

$_SESSION['order_total'] = $order_total;

// You can then retrieve the order total in other PHP files like this:
// session_start();
// $order_total = $_SESSION['order_total'];

?>