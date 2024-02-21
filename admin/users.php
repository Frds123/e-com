<?php
require_once 'functions.php';

// Check if user is logged in
if (!isUserLoggedIn()) {
    redirect('index.php');
}

// Handle form submission
if (isset($_POST['update_password'])) {
    // Get form data
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate form data
    if ($new_password != $confirm_password) {
        $error = 'New password and confirm password do not match.';
    } else {
        // Update password in database
        $user_id = getLoggedInUser();
        changeUserPassword($user_id, $current_password, $new_password);
        $message = 'Password has been updated.';
    }
}

// Get user information from database
$user_id = getLoggedInUser();
$user = getUserById($user_id);

// Include header
include 'header.php';
?>

<h1>User Information</h1>

<table>
    <tr>
        <th>Name:</th>
        <td><?php echo htmlspecialchars($user['name']); ?></td>
    </tr>
    <tr>
        <th>Email:</th>
        <td><?php echo htmlspecialchars($user['email']); ?></td>
    </tr>
</table>

<h2>Update Password</h2>

<?php if (isset($error)): ?>
    <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
<?php endif; ?>

<?php if (isset($message)): ?>
    <p style="color: green;"><?php echo htmlspecialchars($message); ?></p>
<?php endif; ?>

<form method="post">
    <label for="current_password">Current Password:</label>
    <input type="password" name="current_password" id="current_password" required>
    <br>
    <label for="new_password">New Password:</label>
    <input type="password" name="new_password" id="new_password" required>
    <br>
    <label for="confirm_password">Confirm Password:</label>
    <input type="password" name="confirm_password" id="confirm_password" required>
    <br>
    <input type="submit" name="update_password" value="Update Password">
</form>

<?php
// Include footer
include 'footer.php';
?>