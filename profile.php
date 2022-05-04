<?php
include_once 'navbar/header.php';
require_once 'navbar/auth_check.php';
?>

<?php
    if(isset($_SESSION["useruid"])){
        echo "<p>" .$_SESSION["useruid"]. "</p>";
    }
?>

<?php
include_once 'navbar/footer.php';
?>