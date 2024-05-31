<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>KodingNext</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
        }

        a {
            display: inline-block;
            margin: 10px 0;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Hi Kids Welcome to your Website</h1>
        <?php if (isset($_SESSION['username'])) : ?>
            <p>Hello, <?php echo htmlspecialchars($_SESSION['username']); ?>! You are logged in.</p>
            <a href="dashboard.php">Go to Dashboard</a><br>
            <a href="logout.php">Logout</a>
        <?php else : ?>
            <p>You are not logged in.</p>
            <a href="login.php">Login</a><br>
            <a href="register.php">Register</a>
        <?php endif; ?>
    </div>
</body>

</html>