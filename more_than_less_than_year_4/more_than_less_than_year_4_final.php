<?php
    include_once '../includes/dbh.inc.php';
    include '../navbar/quizheader.php';
    include '../navbar/quiz_auth_check.php';
?>

<?php
    //Get total of questions
    $query = "SELECT * FROM `questions` WHERE topic = 'more_than_less_than_year_4'";

    //Get the results
    $results = mysqli_query($conn, $query) or die(mysqli_error($conn) . __LINE__);

    $total = mysqli_num_rows($results);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finished</title>
</head>

<body>
    <div class="quiz-container">
        <h2>
            Quiz Completed!
        </h2>
        <p>Congratulations! You have completed the quiz!</p>
        <p>Final Score: <?php echo ($_SESSION['score'] / $total) * 100?>%</p>
        <button type="retake"><a href="more_than_less_than_year_4.php">Retake Quiz</a></button>
    </div>
</body>


</html>

<?php
include_once '../navbar/quizfooter.php'
?>