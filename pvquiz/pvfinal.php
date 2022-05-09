<?php
include_once '../navbar/quizheader.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="quiz-container">
        <h2>
            Quiz Completed!
        </h2>
        <p>Congratulations! You have completed the quiz!</p>
        <p>Final Score: <?php echo $_SESSION['score']; ?> out of <?php $total?></p>
        <button type="retake" ><a href="pv.php">Retake Quiz</a></button>
    </div>
</body>

<?php session_destroy();?>

</html>