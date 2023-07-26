<?php
// Retrieve the submitted email and password
$email = $_POST['email'];
$password = $_POST['password'];


session_start();
// Perform your login verification process here (e.g., query the database)


/***************************** DATABASE CONNECTION *****************************/
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
$email = mysqli_real_escape_string($connection, $email);
$password = mysqli_real_escape_string($connection, $password);

// Prepare the SQL query to retrieve the user data from the table based on the email
$query = "SELECT * FROM users WHERE email = '$email'";

// Execute the query
$result = mysqli_query($connection, $query);

// Check if the query was successful
if ($result) {
    // Check if a matching user was found
    if (mysqli_num_rows($result) > 0) {
        // Fetch the user data
        $user = mysqli_fetch_assoc($result);

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Password is correct, user is authenticated
            echo 'Login successful!';
            header("Location: form1.html");
        } else {
            // Password is incorrect
            echo 'Incorrect password. Please try again.';
        }
    } else {
        // No matching user found
        echo 'User not found. Please check your email.';
    }
} else {
    echo 'Error: ' . mysqli_error($connection);
}

// Close the database connection
mysqli_close($connection);
?>
