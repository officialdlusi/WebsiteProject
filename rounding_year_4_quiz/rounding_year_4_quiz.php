<?php
    include_once '../includes/dbh.inc.php';
    include '../navbar/quizheader.php';
    include '../navbar/quiz_auth_check.php';
?>

<?php

//get question number
$number = (int) $_GET['n'];

//get total of questions
$query = "SELECT * FROM `questions` WHERE topic = 'rounding_year_4'";

//get total result
$result = mysqli_query($conn, $query) or die(mysqli_error($conn) . __LINE__);
$total = mysqli_num_rows($result);

//get question from database
$query = "SELECT * FROM `questions` WHERE questions_number = $number AND topic = 'rounding_year_4'";

//get results from db
$result = mysqli_query($conn, $query) or die(mysqli_error($conn) . __LINE__);

$question = mysqli_fetch_assoc($result);

//get choices from databse
$query = "SELECT * FROM `choices` WHERE questions_number = $number AND topic = 'rounding_year_4'";

//get results from db
$choices = mysqli_query($conn, $query) or die(mysqli_error($conn) . __LINE__);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rounding Q: <?php echo $question['questions_number']; ?></title>
</head>

<body>
    <div class="quiz-container">
        <div class="current-question">Question <?php echo $question['questions_number']; ?> of <?php echo $total?></div>
        <p class="question">
            <?php
            echo $question['text'];
            ?>
        </p>
        <form method="post" action="rounding_year_4_process.php">
            <ul class="choices">
                <?php
                while ($row = mysqli_fetch_assoc($choices)) :
                ?>
                    <li><input name="choice" type="radio" value="<?php echo $row['id']; ?>"><?php echo $row['text']; ?></li>
                <?php endwhile; ?>
            </ul>
            <input type="submit" value="submit"/>
            <input type="hidden" name="number" value="<?php echo $number; ?>"/>
        </form>
    </div>
</body>
</html>

<?php
include_once '../navbar/quizfooter.php'
?>