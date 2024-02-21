<?php
include 'db_connection.php';

// Add product
function addProduct($name, $price, $category_id) {
    global $conn;
    $sql = "INSERT INTO products (name, price, category_id) VALUES ('$name', $price, $category_id)";
    return $conn->query($sql);
}

// Update product
function updateProduct($id, $name, $price, $category_id) {
    global $conn;
    $sql = "UPDATE products SET name='$name', price=$price, category_id=$category_id WHERE id=$id";
    return $conn->query($sql);
}

// Delete product
function deleteProduct($id) {
    global $conn;
    $sql = "DELETE FROM products WHERE id=$id";
    return $conn->query($sql);
}
?>
