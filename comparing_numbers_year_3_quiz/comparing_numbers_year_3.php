<?php
include_once '../includes/dbh.inc.php';
include_once '../navbar/quizheader.php';
?>

<?php
//Get total of questions
$query = "SELECT * FROM `questions` WHERE topic = 'comparing_numbers_year_3'";

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
    <title>Comparing Numbers Year 3 Quiz</title>
</head>

<body>
    <header>
        <div class="quiz-container">
            <h1>
                Comparing Numbers
            </h1>
            <p>Please select the correct answer</p>
            <ul>
                <li><strong>Number of Questions: </strong><?php echo $total ?></li>
                <li><strong>Type: </strong>Multiple Choice</li>
                <li><strong>Estimated time for Quiz: </strong><?php echo $total * 0.5 ?> minutes</li>
            </ul>
            <button type="quizbtn"><a href="comparing_numbers_year_3_quiz.php?n=1">Start Quiz</a></button>
        </div>
    </header>
</body>

</html>

<?php
include_once '../navbar/quizfooter.php'
?>