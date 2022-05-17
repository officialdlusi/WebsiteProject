<?php
    require_once '../includes/dbh.inc.php';
    session_start();
?>

<?php
    //check for users score
    if(!isset($_SESSION['score'])) {
        $_SESSION['score'] = 0;
    }

    if($_POST) {
        $number = $_POST['number'];
        $selected_choice = $_POST['choice'];
        $next = $number+1;
        
        //get total of questions
        $query = "SELECT * FROM `quiz` WHERE topic = 'cn'";

        //get total result
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn) . __LINE__);
        $total = mysqli_num_rows($result);

        //get correct answer
        $query = "SELECT *  FROM `choices` WHERE questions_number = $number AND topic = 'cn' AND is_correct = 1";

        //get the answer result
        $result  = mysqli_query($conn, $query) or die(mysqli_error($conn) . __LINE__);

        //get row
        $row = mysqli_fetch_assoc($result);

        //set the correct answer
        $correct_choice = $row['id'];

        if($correct_choice == $selected_choice){
            $_SESSION['score'] ++;
        }

        //check if quiz is finished
        if($number == $total){
            header("location: cnfinal.php?=finished");
            exit();
        } else {
            header("location: cnquiz.php?n=".$next);
        }
    }