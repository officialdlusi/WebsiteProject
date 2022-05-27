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
    <title>Year 3</title>
</head>
<body>
    <div class="yeartopics">
        <h1>Year 3 - Topics</h1>
        <input type="button" class="topicbutton"onclick="location.href='place_value_year_3.php'" value="Place Value">
        <input type="button" class="topicbutton" onclick="location.href='comparing_numbers_year_3.php'" value="Comparing Numbers">
    </div>
</body>
</html>

<?php
include_once 'navbar/footer.php';
?>