<?php
include_once 'navbar/header.php';
?>

<!DOCTYPE html>
<html lang="en">

<section class="loginsignup">
    <form action="includes/login.inc.php" method="post">
        <div class="imgcontainer">
            <a href="index.php">
                <img src="img/momlogo.png" alt="MindOnMaths Logo" class="loginsignuplogo">
            </a>
        </div>

        <h2>Login</h2>

        <div class="container">
            <label for="uid">
                <p>Username/Email</p>
            </label>
            <input type="text" placeholder="Username/Email..." name="uid" required>

            <label for="pwd">
                <p>Password</p>
            </label>
            <input type="password" name="pwd" placeholder="Password..." required>

            <button type="submit" name="submit">Login</button>

            <input type="button" class="signupbutton" onclick="location.href='signup.php'" value="Don't have an account?">
        </div>

        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<h2>One or more fields in not filled</h2>";
            } else if ($_GET["error"] == "wronglogin") {
                echo "<h2>One or more fields is incorrect</h2>";
            }
        }
        ?>
    </form>

    </div>
</section>

</html>

<?php
include_once 'navbar/footer.php';
?>