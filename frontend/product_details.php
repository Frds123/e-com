<?php
// Include the database connection file
include 'database-connection.php';

// Get the product ID from the URL parameter
$productId = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch the product details from the database
$stmt = $pdo->prepare("SELECT * FROM products WHERE id = :productId");
$stmt->bindParam(':productId', $productId);
$stmt->execute();
$product = $stmt->fetch();

// Check if the product exists
if ($product) {
    // Display the product details
    include 'product-details.html.php';
} else {
    // Product not found, redirect to homepage or error page
    header('Location: index.php');
    exit;
}
?>