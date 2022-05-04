<?php
include_once '../navbar/header.php';
require_once '../navbar/auth_check.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="dashboard">
        <div class="box">
            <a href="lessons.html" class="dashboardlink">
                <h2>Lessons</h2>
            </a>
        </div>
        <div class="box">
            <a href="quiz.html" class="dashboardlink">
                <h2>Quiz</h2>
            </a>
        </div>

        <div class="box">
            <a href="worksheet.html" class="dashboardlink">
                <h2>Worksheets</h2>
            </a>
        </div>
    </div>
</body>

</html>
<?php
include_once '../navbar/footer.php';
?>