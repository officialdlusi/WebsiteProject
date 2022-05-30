<?php
    include_once '../includes/dbh.inc.php';
    include '../navbar/quizheader.php';
    include '../navbar/quiz_auth_check.php';
?>

<?php
    //Get total of questions
    $query = "SELECT * FROM `questions` WHERE topic = 'rounding_year_4'";

    //Get the results
    $results = mysqli_query($conn, $query) or die(mysqli_error($conn) . __LINE__);

    $total = mysqli_num_rows($results);

    $_SESSION['score'] = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rounding - Year 4</title>
</head>

<body>
    <header>
        <div class="quiz-container">
            <h1>
            Rounding Quiz
            </h1>
            <p>Please select the correct answer</p>
            <ul>
                <li><strong>Number of Questions: </strong><?php echo $total?></li>
                <li><strong>Type: </strong>Multiple Choice</li>
                <li><strong>Estimated time for Quiz: </strong><?php echo $total * 0.5?> minutes</li>
            </ul>
            <button type="quizbtn"><a href="rounding_year_4_quiz.php?n=1">Start Quiz</a></button>
        </div>
    </header>
</body>

</html>

<?php
include_once '../navbar/quizfooter.php'
?>