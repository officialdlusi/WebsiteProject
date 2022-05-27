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
    <title>Comparing Numbers</title>
</head>
<body>
<div class="lessoncontainer">
        <h1>Comaparing Numbers</h1>
        <video controls>
            <source src="videos/ComparingNumbers.mp4" type="video/mp4" class="topicvideo">
        </video>
        <p>
            <strong>What does comparing numbers mean?</strong><br>
            Comparing numbers means to look at the difference in size of numbers, quantities or values. This helps us find out whether a number is <strong>greater</strong> than, <strong>smaller</strong> than or <strong>equal</strong> to another.
        </p>
        <p>
            <strong>How do we compare numbers?</strong><br>
            We compare numbers by using 3 symbols: <strong><</strong> less than, <strong>></strong> greater than and <strong>=</strong> equal to.
        </p>
        <p>
            <strong>Example</strong><br>
            If we were told to compare two, 3 digit numbers, one being 294 and the other 409, the first thing would be to place both numbers onto a place value chart. If you haven't covered the subject, <strong>place value</strong> or need a refresh, head to the subject though this <a href="place_value_year_3.php">link</a>.
        </p>
            <img src="img/place-value-example.png">
        <p>
            We then start from the left column, being the <strong>hundreds</strong> column and compare each number against another. As we know from learning about place value we have, <strong>2 hundreds</strong> from 294 and <strong>4 hundreds</strong> from 409. We know that 2 hundreds is less than 4 hunrdreds and therefore, we do not need to continue to move along the place value chart.
        </p>
        <p>
            Therefore we can say that <strong>294 is less than 409</strong>, or <strong>294 < 409</strong>.
        </p>
        <p>
            <strong>Comparing numbers in everyday life</strong><br>
            An example of comparing numbers in real life can be seen when shopping in supermarkets where we compare food prices, in order to get the cheapest food for the best value.
        </p>   
        <input type="button" class="quizbutton" onClick="location.href='comparing_numbers_year_3_quiz/comparing_numbers_year_3.php'" value="Quiz">
        <input type="button" class="quizbutton" onClick="location.href='#'" value="Comaparing Numbers Worksheet">
    </div>
</body>
</html>

<?php
include_once 'navbar/footer.php';
?>