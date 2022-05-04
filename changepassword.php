<?php

session_start();

$user = $_SESSION["useruid"];

if ($user)
{
    if(isset($_POST['submit']))
    {
        //check fields
        $oldpassword = $_POST['oldpassword'];
        $newpassword = $_POST['newpassword'];
        $repeatnewpassword = $_POST['repeatnewpassword'];

        //check passwords against db
        include 'includes/dbh.inc.php';

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
            } else {
                //header("location: ../changepassword.php?error=newdontmatch");
                echo "new passwords don't match";
            }
        } else {
            //header("location: ../changepassword.php?error=olddontmatch");
            echo "old passwords don't match";
        }





    } else {
    echo "
        <form action='changepassword.php' method='POST'>
            Old Password: <input type='text' name='oldpassword'><p>
            New Password: <input type='password' name='newpassword'><br>
            Repeat New Password: <input type='password' name='repeatnewpassword'><br>
            <input type='submit' name='submit' value='Change Password'>
        </form>
    ";
    }
} else {
    die ("You must be logged in to change your password!!!");
}

// echo "<p>".$_SESSION["useruid"]. "</p>";

?>