<?php
session_start();
// Establish database connection
$conn = new mysqli("localhost", "root", "", "student");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST["email"];
$password = $_POST["password"];
$passwordValid = false;

// Prepare and execute SQL query
$sql = "SELECT * FROM stud WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Check if the email exists in the database
        if ($email === $row["email"]) {
            // Email matches, check if the password matches
            if ($password === $row["password"]) {
                // Password matches, set flag and break the loop
                $passwordValid = true;
                break;
            }
        }
    }

    if ($passwordValid) {
        // Redirect to the home page
        header("Location: home_page.php");
        exit();
    } else {
        // Password not valid, set error message and redirect
        $_SESSION['error'] = "Password not valid";
        header("Location: login.php");
        exit();
    }
} else {
    // No rows found for the email, set error message and redirect
    $_SESSION['error'] = "No account found with this email";
    header("Location: login.php");
    exit();
}

// Close the connection
$conn->close();
?>
