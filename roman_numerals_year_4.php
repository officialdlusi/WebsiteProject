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
    <title>Roman Numerals</title>
</head>
<body>
<div class="lessoncontainer">
        <h1>Roman Numerals</h1>
        <video poster="thumbnails/roman_numerals_year_4_thumbnail.png" controls>
            <source src="videos//roman_numerals_year_4.mp4" type="video/mp4" class="topicvideo">
        </video>
        <p>
            <strong>What are roman numerals?</strong><br>
            Roman numerals are the numbers that were used in ancient Rome, from the Latin alphabet.
        </p>   
        <p>
            <strong>How do we work out roman numerals?</strong><br>
            We are able to work out roman numerals by understanding what each roman numeral value equals and the rules of calculation.
        </p>
        <img src="img/roman_numerals_year_4.png" alt="Roman Numerals 1 - 100">
        <p>
            From the image we can see that each roman numeral has an individual value. The <strong>I</strong> has the value of <strong>1</strong>, the <strong>V</strong> has a value of <strong>5</strong>, the <strong>X</strong> has a value of <strong>10</strong>, the <strong>L</strong> has a value of <strong>50</strong> and the <strong>C</strong> has a value of <strong>100</strong>.
        </p>
        <p>
            <strong>Rules</strong>
        </p>
        <p>
                <strong>1</strong><br>
                If a <strong>smaller numeral</strong> comes <strong>before</strong> a <strong>bigger numeral</strong> we <strong>subtract</strong> the smaller letter from the bigger number, and if a <strong>smaller numeral</strong> comes <strong>after</strong> a <strong>bigger numeral</strong> we <strong>add</strong> <strong>(e.g. IX is 10 - 1 equalling 9 & XI is 10 + 1 equalling 11)</strong>.
        </p>
        <p>
                <strong>2</strong><br>
                You cannot use three of the same letters consecutively. For example to make the value <strong>three</strong> is not <strong>III</strong> but <strong>IIV (5 - 2 = 3)</strong>.
        </p>
        <p>
            <strong>Example</strong><br>
            What is the value of XXI as a number?
        </p>
        <img src="img/roman_numerals_year_4_example.png" alt="Roman Numerals XXI">
        <p>
            The first thing to do when trying to work out the value of this numeral is to split it up into <strong>X</strong> and <strong>XI</strong>. By splitting the numeral up we are able to work out what each part equals. 
        </p>
        <p>
            We know from earlier that the numeral <strong>X</strong> has a value of <strong>10</strong> and the value <strong>I</strong> has a value of <strong>1</strong>. So when working out we know that <strong>X</strong> is <strong>10</strong> and the <strong>XI</strong> has a value of <strong>XI</strong> as the <strong>smaller numeral</strong> comes after the <strong>bigger numeral</strong>.
        </p>
        <p>
            Therefore we know the value of the roman numeral <strong>XXI</strong> is <strong>10 + 11</strong> equalling <strong>21</strong>.
        </p>
        <input type="button" class="quizbutton" onClick="location.href='roman_numerals_year_4/roman_numerals_year_4.php'"value="Quiz">
        <a href="worksheets/roman_numerals_year_4(questions&answers).pdf" target="_blank"><button class="quizbutton">Worksheets</button></a>
    </div>
</body>
</html>
<?php
include_once 'navbar/footer.php';
?>