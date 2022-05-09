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
    <title>Document</title>
</head>
<body>
<div class="lessoncontainer">
        <h1>Roman Numerals</h1>
        <video controls>
            <source src="videos/RomanNumerals.mp4" type="video/mp4" class="topicvideo">
        </video>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Placerat in egestas erat imperdiet sed euismod. Aliquet nec ullamcorper sit amet. Eros in
            cursus turpis massa tincidunt dui. Metus dictum at tempor commodo. Tincidunt nunc pulvinar sapien et ligula
            ullamcorper malesuada. Tortor aliquam nulla facilisi cras fermentum odio eu. Etiam dignissim diam quis enim
            lobortis scelerisque. Et malesuada fames ac turpis egestas maecenas pharetra convallis. Metus aliquam
            eleifend mi in nulla posuere. Faucibus scelerisque eleifend donec pretium vulputate sapien nec. Id cursus
            metus aliquam eleifend mi in. Feugiat nisl pretium fusce id.
        </p>   
        <input type="button" class="quizbutton" onClick="location.href='rquiz/rn.php'"value="Quiz">
        <input type="button" class="quizbutton" onClick="location.href='#'" value="Roman Numerals Worksheet">
    </div>
</body>
</html>
<?php
include_once 'navbar/footer.php';
?>