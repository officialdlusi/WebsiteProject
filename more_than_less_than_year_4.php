<?php
require_once 'navbar/header.php';
require_once 'navbar/auth_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1000 More Than, Less Than</title>
</head>
<body>
<div class="lessoncontainer">
        <h1>1000 More Than, Less Than</h1>
        <video controls>
            <source src="videos/more_than_less_than_year_4.mp4" type="video/mp4" class="topicvideo">
        </video>
        <p>
            <strong>What does 1000 more than, less than mean?</strong><br>
            1000 more than, less than means to <strong>add</strong>, in the case of <strong>1000 more</strong> and to <strong>subtract</strong>, in the case of <strong>1000 less</strong>.
        </p>
        <p>

        </p>
        <input type="button" class="quizbutton" onClick="location.href='more_than_less_than_year_4/more_than_less_than_year_4.php'"value="Quiz">
        <input type="button" class="quizbutton" onClick="location.href='#'" value="Roman Numerals Worksheet">
    </div>
</body>
</html>
<?php
include_once 'navbar/footer.php';
?>