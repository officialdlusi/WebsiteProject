<?php
include_once 'navbar/header.php';
?>

<!DOCTYPE html>
<html lang="en">

<section class="loginsignup">
    <form action="includes/signup.inc.php" method="post">
        <div class="imgcontainer">
            <a href="index.php">
                <img src="img/logo.png" alt="MindOnMaths Logo" class="loginsignuplogo">
            </a>
        </div>

        <h2>Sign Up</h2>

        <div class="container">
            <label for="name">
                <p>Name</p>
            </label>
            <input type="text" name="name" placeholder="Full name..." required>

            <label for="email">
                <p>Email</p>
            </label>
            <input type="text" name="email" placeholder="Email..." reuqired>

            <label for="uid">
                <p>Username</p>
            </label>
            <input type="text" name="uid" placeholder="Username..." required>

            <label for="pwd">
                <p>Password</p>
            </label>
            <input type="password" name="pwd" placeholder="Password..." required>

            <label for="pwdrepeat">
                <p>Confirm Password</p>
            </label>
            <input type="password" name="pwdrepeat" placeholder="Repeat Password..." required>

            <button type="submit" name="submit">Sign Up</button>
        </div>
        <?php

        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<h2>One or more fields is not filled</h2>";
            } else if ($_GET["error"] == "invaliduid") {
                echo "<h2>This username is invalid</h2>";
            } else if ($_GET["error"] == "invalidemail") {
                echo "<h2>This email is invalid</h2>";
            } else if ($_GET["error"] == "passwordsdontmatch") {
                echo "<h2>The passwords do not match</h2>";
            } else if ($_GET["error"] == "stmtfailed") {
                echo "<h2>Something went wrong</h2>";
            } else if ($_GET["error"] == "usernametaken") {
                echo "<h2>This username is taken</h2>";
            } else if ($_GET["error"] == "none") {
                echo "<h2>Sign up successful</h2>";
            }
        }
        ?>
    </form>
</section>

</html>

<?php
include_once 'navbar/footer.php';
?>