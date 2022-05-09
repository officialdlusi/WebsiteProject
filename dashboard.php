<?php
include_once 'navbar/header.php';
session_start();
require_once 'navbar/auth_check.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <!-- <p><?php echo $_SESSION['useruid'] ?>'s Dashboard</p> -->
    <div class="dashboard">

        <div class="box">

            <a href="lessons.html" class="dashboardlink">
                <h2>Year 3</h2>
            </a>
        </div>
        <div class="box">
            <a href="quiz.html" class="dashboardlink">
                <h2>Year 4</h2>
            </a>
        </div>

        <div class="box">
            <a href="worksheet.html" class="dashboardlink">
                <h2>Year 5</h2>
            </a>
        </div>
    </div>
</body>

</html>
<?php
include_once 'navbar/footer.php';
?>