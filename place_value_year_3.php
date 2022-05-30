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
    <title>Place Value</title>
</head>

<body>
    <div class="lessoncontainer">
        <h1>Place Value</h1>
        <video poster="thumbnails/place_value_year_3_thumbnail.png" controls>
            <source src="videos/place_value_year_3.mp4" type="video/mp4" class="topicvideo">
        </video>
        <p>
            <strong>What does place value mean?</strong><br>
            Place value is the value of a digit within  a number based on the location of the digit. This is based on the position of the digit. Place value is important as it gives us understand of how to <strong>compare</strong> numbers and do <strong> arithimetic (multiply, divide, add, subtract).</strong>
        </p>
        <p>
            <strong>How do we work out place value?</strong><br>
            We are able to work out place value by using a <strong>place value chart</strong> which can be seen below.
        </p>
        <img src="img/place_value_blank.png" alt="place value chart - 653">
        <p>
            <strong>Example</strong><br>
            What is the place value of 6 in the number <strong>653</strong> ?
        </p>
        <img src="img/place_value_653.png" alt="place value chart">
        <p>
            Because 653 is a 3 digit number, without any decimal places the number starts at the <strong>hundreds</strong> column and ends at the onces column, on the place value chart, in order to workout the value of the digit, <strong>6</strong> in the number we look at where the 6 <strong>aligns up</strong> with on the place value chart.
        </p>
        <p>
            Therefore we can say that the <strong>6</strong> in <strong>653</strong> has a place value of <strong>6 hundreds</strong> or <strong>600.</strong>
        </p>
        <p>
            <strong>Place value in everyday life</strong><br>
            An example of using place value in treal life can be seen in working out weight when we mgiht want to find out how heavy an item is (e.g. a tennis ball).
        </p>
        <input type="button" class="quizbutton" onClick="location.href='place_value_year_3/place_value_year_3.php'" value="Quiz">
        <a href="worksheets/place_value_year_3(questions&answers).pdf" target="_blank"><button class="quizbutton">Worksheets</button></a>
    </div>
</body>

</html>

<?php
include_once 'navbar/footer.php';
?>