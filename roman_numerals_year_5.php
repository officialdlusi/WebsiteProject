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
        <video poster="thumbnails/roman_numerals_year_5_thumbnail.png" controls>
            <source src="videos/roman_numerals_year_5.mp4" type="video/mp4" class="topicvideo">
        </video>
        <p>
            <strong>What are roman numerals?</strong><br>
            Roman numerals are the numbers that were used in ancient Rome, from the Latin alphabet.
        </p>
        <p>
            <strong>How do we work out roman numerals?</strong><br>
            We are able to work out roman numerals by understanding what each roman numeral value equals and the rules of calculation. If you need a refresh on the roman numerals from <strong>1 - 100</strong> click this <a href="roman_numerals_year_4.php">link here</a>.
        </p>
        <img src="img/roman_numerals_year_5.png" alt="Roman Numerals 500 & 1000">
        <p>
            From the image we can see that each roman numeral has an individual value. The <strong>D</strong> has the value of <strong>500</strong> and <strong>M</strong> has  value of <strong>1000</strong>.
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
            What is the value of MDLXVI as a number?
        </p>
        <img src="img/roman_numerals_year_5_example.png" alt="Roman Numerals MDLXVI">
        <p>
            The first thing to do when trying to work out the value of this numeral is to split it up into <strong>M</strong>, <strong>D</strong>, <strong>L</strong>, <strong>X</strong>, <strong>V</strong> and <strong>I</strong>. By splitting the numeral up we are able to work out what each part equals. 
        </p>
        <p>
            We know from earlier that the numeral <strong>M</strong> has a value of <strong>1000</strong> and the numeral <strong>D</strong> has the value of <strong>500</strong>. From our <a href="roman_numerals_year_4.php">year 3</a> lesson we also learnt that the numerals <strong>L</strong> has the value of <strong>50</strong>, <strong>X</strong> the value of <strong>10</strong>, <strong>V</strong> the value of <strong>5</strong> and <strong>I</strong> the value of <strong>1</strong>.
        </p>
        <p>
            Therefore we know the value of the roman numeral <strong>MDLXVI</strong> is <strong>1000 + 500 + 50 + 10 + 5 + 1</strong> equalling <strong>1566</strong>.
        </p>
        <input type="button" class="quizbutton" onClick="location.href='roman_numerals_year_5_quiz/roman_numerals_year_5.php'" value="Quiz">
        <a href="worksheets/roman_numerals_year_5(questions&answers).pdf" target="_blank"><button class="quizbutton">Worksheets</button></a>
    </div>
</body>

</html>
<?php
include_once 'navbar/footer.php';
?>