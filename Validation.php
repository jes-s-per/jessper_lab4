<?php

// Include the db_connect.php script
require_once 'db_connect.php';

// Connect to the database
$conn = db_connect();

// Get the user credentials from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the user credentials are valid
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->rowCount() > 0) {
    // The user credentials are valid
    // Log in the user
    // ...

    // Redirect the user to the home page
    header('Location: home.php');
} else {
    // The user credentials are not valid
    // Display an error message to the user
    echo "Invalid username or password.";
    // Redirect the user to the index page
    header('Location: index.php');
}

?>
