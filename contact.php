<?php
include_once 'navbar/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>

<body>
    <div class="contactcontainer">
        <h1>Contact Us</h1>
        <form action="includes/contactform.php" method="post">
            <p>Full Name</p>
            <input type="text" name="name" placeholder="Full name" require>
            <p>Email Address</p>
            <input type="text" name="mail" placeholder="Your email" require>
            <p>Subjects</p>
            <input type="text" name="subject" placeholder="Subject" require>
            <p>Message</p>
            <textarea name="message" placeholder="Message"></textarea require><br>
            <button type="submit" name="submit">Send</button>
        </form>
    </div>
</body>

</html>

<?php
include_once 'navbar/footer.php';
?>