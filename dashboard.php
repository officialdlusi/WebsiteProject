<?php
include_once 'navbar/header.php';
require_once 'navbar/auth_check.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h1 class="dashboard-username">Welcome to your Dashboard, <?php echo $_SESSION['useruid'] ?></h1>
    <div class="dashboard">

        <div class="box">

            <a href="year3.php" class="dashboardlink">
                <h2>Year 3</h2>
            </a>
        </div>
        <div class="box">
            <a href="year4.php" class="dashboardlink">
                <h2>Year 4</h2>
            </a>
        </div>

        <div class="box">
            <a href="year5.php" class="dashboardlink">
                <h2>Year 5</h2>
            </a>
        </div>
    </div>
</body>

</html>
<?php
include_once 'navbar/footer.php';
?>