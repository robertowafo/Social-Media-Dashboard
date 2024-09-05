<?php
session_start();

// Check if the user is logged in 
if (!isset($_SESSION['name'])) {
    header("Location: login.html"); 
    exit();
}

$name = $_SESSION['name']; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            font-size: 24px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bonjour, <?php echo htmlspecialchars($name); ?> !</h1>
        <p>Bienvenue sur votre tableau de bord.</p>
    </div>
</body>
</html>
