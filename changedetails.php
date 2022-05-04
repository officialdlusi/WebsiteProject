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
</head>

<body>
    <form action="" method="post">
        <ul>
            <li>
                Current Password*:<br>
                <input type="text" name="current_password">
            </li>
            <li>
                New Password*:<br>
                <input type="text" name="password">
            </li>
            <li>
                New Password*:<br>
                <input type="text" name="passwor_again">
            </li>
            <li>
                <input type="submit" value="Change Password">
            </li>
        </ul>
    </form>

</body>

</html>

<?php
include_once 'navbar/footer.php';
?>