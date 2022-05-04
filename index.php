<?php
include_once 'navbar/header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

<body>
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="img/background-home-first-slide.png" style="width: 100%;">
            <div class="info">
                <h2>
                    Welcome to MindOnMaths!
                </h2>
                <p>
                    We are proud to release our new Maths website to teach primary school aged children all about the amazing world of MATHS.
                </p>
            </div>
        </div>

        <div class="mySlides fade">
            <img src="img/background-home-colour.png" style="width: 100%;">
            <div class="info">Welcome to MindOnMaths!</div>
        </div>

        <div class="mySlides fade">
            <img src="img/background-home-colour.png" style="width: 100%;">
            <div class="info">Caption Three</div>
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