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
    <title>Rounding</title>
</head>
<body>
<div class="lessoncontainer">
        <h1>Rounding</h1>
        <video poster="thumbnails/rounding_year_4_thumbnail.png" controls>
            <source src="videos/rounding_year_4.mp4" type="video/mp4" class="topicvideo">
        </video>
        <p>
            <strong>What is rounding?</strong><br>
            Rounding is making a number simplier by adjusting the digits within it, <strong>up or down</strong> to make rough calculations easier.
        </p>   
        <p>
            <strong>How do we round?</strong><br>
            We round by using a place value chart and looking what digit the number is followed by. If the value is equal to <strong>5 or more</strong> we round <strong>up</strong>, but if it is <strong>less than 5</strong> we round <strong>down</strong>.
        </p>
        <p>
            <strong>Example</strong><br>
            What is the number 523 rounded to the nearest 10?
        </p>
        <img src="img/rounding_year_4_example.png" alt="Rounding 523">
        <p>
            When trying to work ou the value of any given number to the <strong>nearest 10</strong>, we need to look at the <strong>ones</strong> column in the place value chart. As we can see in the place value chart we have <strong>3 ones (3)</strong>. From looking at this value we know that is is <strong>less than 5</strong> and therefore we <strong>round  down</strong>.
        </p>
        <p>
            Therefore we know that the answer will be <strong>520</strong>.
        </p>
        <input type="button" class="quizbutton" onClick="location.href='rounding_year_4_quiz/rounding_year_4.php'" value="Quiz">
        <input type="button" class="quizbutton" onClick="location.href='#'" value="Rounding Worksheet">
    </div>
</body>
</html>
<?php
include_once 'navbar/footer.php';
?>