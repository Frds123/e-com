<?php
include 'db_connection.php';

// Add category
function addCategory($name) {
    global $conn;
    $sql = "INSERT INTO categories (name) VALUES ('$name')";
    return $conn->query($sql);
}

// Update category
function updateCategory($id, $name) {
    global $conn;
    $sql = "UPDATE categories SET name='$name' WHERE id=$id";
    return $conn->query($sql);
}

// Delete category
function deleteCategory($id) {
    global $conn;
    $sql = "DELETE FROM categories WHERE id=$id";
    return $conn->query($sql);
}

// Activate category
function activateCategory($id) {
    global $conn;
    $sql = "UPDATE categories SET active=1 WHERE id=$id";
    return $conn->query($sql);
}

// Deactivate category
function deactivateCategory($id) {
    global $conn;
    $sql = "UPDATE categories SET active=0 WHERE id=$id";
    return $conn->query($sql);
}
?>
