<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="../img/favicon.png">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>
</head>

<body>
    <nav class="navbar">
        <div class="brand-title">MindOnMaths</div>
        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="navbar-links">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <?php
                if (isset($_SESSION["useruid"])) {
                    echo "<li><a href='../dashboard.php'>Dashboard</a></li>";
                    echo "<li><a href='../settings.php'>Settings</a></li>";
                    echo "<li><a href='../includes/logout.inc.php'>Logout</a></li>";
                    //echo "<p>" .$_SESSION["useruid"]. "</p>";
                } else {
                    echo "<li><a href='../signup.php'>Sign Up</a></li>";
                    echo "<li><a href='../login.php'>Login</a></li>";
                }
                ?>
            </ul>
        </div>
    </nav>
</body>