<?php
include_once 'navbar/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="img/background-home-first-slide.png" style="width: 100%;">
            <div class="info">
                <h2>
                    Welcome to MindOnMaths!
                </h2>
                <p>
                    We are proud to release our new Maths website to teach primary school aged children all about the amazing world of MATHS.<br><br>
                    We understand how boring and tough Maths can be for young children and are bringing you a website full of quizzes, lessons and worksheets to keep you all busy, while entertained at the same time.
                </p>
            </div>
        </div>

        <div class="mySlides fade">
            <img src="img/background-home-second-slide.png" style="width: 100%;">
            <div class="info">
                <h2>
                    Sign Up
                </h2>
                <p>
                    Head to the sign up page to all of our content on several Math's subjects.
                </p>
            </div>
        </div>

        <div class="mySlides fade">
            <img src="img/background-home-third-slide.png" style="width: 100%;">
            <div class="info">
                <h2>
                    Contact Us
                </h2>
                <p>
                    We love to hear feedback from our users and will continue to update the website. We as a company strive to read all our emails and get back to you. Whether its a new idea or a improvement which can be made we love to hear about it, and will always take it onboard.<br><br>
                    Head to the bottom of the page and fill in our <a href="contact.php">Contact Us</a> form and we will reply to you within 1-2 working days.
                </p>
            </div>
        </div>
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
    </div>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
</body>
</head>

</html>

<?php
include_once 'navbar/footer.php';
?>