<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $password);

    if ($stmt->execute()) {
        // After signup, store the user information in session
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;

        // Redirect to the dashboard page
        header("Location: dashboard.php");
        exit();
    } else {
        // Handle sign-up failure
        echo "Error: " . $stmt->error;
    }
}
?>
