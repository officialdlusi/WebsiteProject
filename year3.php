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
        <input type="button" class="topicbutton" onclick="location.href='comparingnumbers.php'" value="Comparing Numbers">
        <input type="button" class="topicbutton"onclick="location.href='placevalue.php'" value="Place Value">
    </div>
</body>
</html>

<?php
include_once 'navbar/footer.php';
?>