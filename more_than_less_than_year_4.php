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
            <strong>How do we work out 1000 more or 1000 less than a given value?</strong><br>
            We are able to work 1000 more or 1000 less than a given value by using a place value chart. If you have not learnt about place value yet or need a refresh use this <a href="place_value_year_3.php">link</a> here.
        </p>
        <img src="img/place_value_thousands_blank.png" alt="Place value chart">
        <p>
            <strong>Example</strong><br>
            What is 1000 less than of <strong>4219</strong>?
        </p>
        <img src="img/more_than_less_than_example.png" alt="Less than example">
        <p>
            When trying to work out how to find <strong>1000 less</strong> than of a value we <strong>subtract</strong> 1000 from the given value. Once we place the value and the amount less we want to find we
        </p>
        <input type="button" class="quizbutton" onClick="location.href='more_than_less_than_year_4/more_than_less_than_year_4.php'"value="Quiz">
        <input type="button" class="quizbutton" onClick="location.href='#'" value="Roman Numerals Worksheet">
    </div>
</body>
</html>
<?php
include_once 'navbar/footer.php';
?>