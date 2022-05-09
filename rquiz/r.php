<?php
    include_once '../includes/dbh.inc.php';
    // include_once '../navbar/header.php';
    session_start();
?>

<?php
    //Get total of questions
    $query = "SELECT * FROM `quiz` WHERE topic = 'r'";

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
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Rounding Year 4</title>
</head>

<body>
    <header>
        <div class="quiz-container">
            <h1>
            Rounding Quiz
            </h1>
        </div>
        <div class="quiz-container">
            <p>Please select the correct answer</p>
            <ul>
                <li><strong>Number of Questions: </strong><?php echo $total?></li>
                <li><strong>Type: </strong>Multiple Choice</li>
                <li><strong>Estimated time for Quiz: </strong><?php echo $total * 0.5?> minutes</li>
            </ul>
            <a href="rquiz.php?n=1">Start Quiz</a>
        </div>
    </header>
</body>

</html>

<?php
include_once '../navbar/footer.php'
?>