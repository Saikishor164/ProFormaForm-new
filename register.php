<?php
// Retrieve the submitted name, email, password, and confirm password
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirm_password'];

// Perform your registration process here (e.g., validate data, insert into the database)
// ...

// Example registration validation
if ($password !== $confirmPassword) {
    // Password and confirm password do not match
    echo 'Password and confirm password do not match.';
} else {
    // Perform necessary operations (e.g., insert into database)
    // ...

    // Database connection configuration
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'proforma';

    // Create a database connection
    $connection = mysqli_connect($hostname, $username, $password, $database);

    // Check if the connection was successful
    if (!$connection) {
        die('Database connection failed: ' . mysqli_connect_error());
    }

    // Escape special characters to prevent SQL injection
    $name = mysqli_real_escape_string($connection, $name);
    $email = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection, $password);

    // Hash the password for better security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare the SQL query to insert the user data into the table
    $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashedPassword')";

    // Execute the query
    if (mysqli_query($connection, $query)) {
        echo 'Registered successfully!';
        header("Location: login.html");
    } else {
        echo 'Error: ' . mysqli_error($connection);
    }

    // Close the database connection
    mysqli_close($connection);
}
?>
