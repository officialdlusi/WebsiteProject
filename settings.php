<?php
include_once 'navbar/header.php';
require_once 'navbar/auth_check.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
</head>

</html>

<body>
    <section class="settings">
        <h1>Settings</h1>
        <div class="changepasswordcontainer">
            <form action="includes/changepassword.inc.php" method="post">
                <h2>Change Password</h2>
                <label for="oldpassword">
                    <p>Current Password</p>
                </label>
                <input type="text" name="oldpassword" placeholder="Current Password"><br>
                <label for="newpassword">
                    <p>New Password</p>
                </label>
                <input type="text" name="newpassword" placeholder="New Password"><br>
                <label for="repeatnewpassword">
                    <p>Repeat New Password</p>
                </label>
                <input type="text" name="repeatnewpassword" placeholder="Repeat New Password"><br>
                <button type="submit">Change Password</button>

                <?php

                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "newnomatch") {
                        echo "<h2>Your new passwords do not match</h2>";
                    } else if ($_GET["error"] == "oldnomatch") {
                        echo "<h2>Your old password is not correct</h2>";
                    }
                }
                ?>
            </form>
        </div>
    </section>
</body>
<?php
include_once 'navbar/footer.php';
?>