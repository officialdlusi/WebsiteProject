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
    <title>Year 4</title>
</head>
<body>
    <div class="yeartopics">
        <h1>Year 4 - Topics</h1>
        <input type="button" class="topicbutton" onclick="location.href='roman_numerals_year_4.php'" value="Roman Numerals">
        <input type="button" class="topicbutton" onclick="location.href='more than_less_than_year_4.php'" value="More Than Less Than">
    </div>
</body>
</html>

<?php
include_once 'navbar/footer.php';
?>