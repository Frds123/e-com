<?php // index.php (Homepage) ?>
<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
</head>
<body>
    <h1>Welcome to Our E-commerce Site</h1>
    <!-- Display featured products and categories -->
</body>
</html>

<?php // categories.php (Categories Listing) ?>
<!DOCTYPE html>
<html>
<head>
    <title>Categories</title>
</head>
<body>
    <h1>Categories</h1>
    <!-- Display list of categories -->
</body>
</html>

<?php // product_details.php (Product Details) ?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Details</title>
</head>
<body>
    <h1>Product Details</h1>
    <!-- Display detailed information about a product -->
</body>
</html>

<?php // cart.php (Add to Cart) ?>
<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
</head>
<body>
    <h1>Shopping Cart</h1>
    <!-- Manage cart items -->
</body>
</html>

<?php // order_history.php (Order History) ?>
<!DOCTYPE html>
<html>
<head>
    <title>Order History</title>
</head>
<body>
    <h1>Order History</h1>
    <!-- Display order history for logged-in users -->
</body>
</html>

<?php // login.php (Login Page) ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <!-- User login form -->
</body>
</html>

<?php // register.php (Registration Page) ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>
    <h1>Registration</h1>
    <!-- User registration form -->
</body>
</html>

<?php // admin/categories.php (Categories Management) ?>
<?php
// Code for managing categories
?>

<?php // admin/products.php (Products Management) ?>
<?php
// Code for managing products
?>

<?php // admin/orders.php (Orders Management) ?>
<?php
// Code for managing orders
?>

<?php // admin/users.php (Users Management) ?>
<?php
// Code for managing users
?>

<?php // admin/contact_messages.php (Contact Messages Management) ?>
<?php
// Code for managing contact messages
?>

<?php // includes/db_connection.php (Database Connection) ?>
<?php
// Database connection code
$conn = new mysqli("localhost", "username", "password", "database");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php // includes/functions.php (Functions) ?>
<?php
// Functions for CRUD operations, etc.
?>
