<?php

session_start();

$user = $_SESSION["useruid"];

    if(isset($_POST['submit']))
    {
        //check fields
        $oldpassword = $_POST['oldpassword'];
        $newpassword = $_POST['newpassword'];
        $repeatnewpassword = $_POST['repeatnewpassword'];

        //check passwords against db
        include 'dbh.inc.php';

        $queryget = "SELECT usersPwd FROM `users` WHERE usersuid = '$user'";
        $result = mysqli_query($conn, $queryget);
        $row = mysqli_fetch_assoc($result);

        $oldpassworddb = $row['usersPwd'];

        //check passwords
        if (password_verify($oldpassword, $oldpassworddb))
        {
            // check two new passwords
            if($newpassword == $repeatnewpassword)
            {
                $hashednewpassword = password_hash($newpassword, PASSWORD_DEFAULT);
                $querychange = "UPDATE users SET usersPwd = '$hashednewpassword' WHERE usersuid = '$user'";
                $result = mysqli_query($conn, $querychange);
                header("location: ../index.php?error=passwordchanged");
                session_destroy();
            } else {
                header("location: ../settings.php?error=newnomatch");
                echo "new passwords don't match";
            }
        } else {
            header("location: ../settings.php?error=oldnomatch");
            echo "old passwords don't match";
        }

    } else {
        header("location: ../settings.php");
        exit();
    }

?>