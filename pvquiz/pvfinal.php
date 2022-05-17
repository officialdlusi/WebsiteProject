<?php
include_once '../navbar/quizheader.php';
require_once '../includes/dbh.inc.php';
?>

<?php
//Get total of questions
$query = "SELECT * FROM `quiz` WHERE topic = 'pv'";

//Get the results
$results = mysqli_query($conn, $query) or die(mysqli_error($conn) . __LINE__);

$total = mysqli_num_rows($results);
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
        <p>Final Score: <?php echo $_SESSION['score']; ?> / <?php echo $total ?></p>
        <button type="retake" ><a href="pv.php">Retake Quiz</a></button>
    </div>
</body>

</html>