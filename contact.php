<!-- <?php
include_once 'navbar/header.php';
?> -->

<!DOCTYPE html>
<html lang="en">
    <body>
        <p>SEND-EMAIL</p>
        <form class="contact-form" action="includes/contactform.php" method="post">
            <input type="text" name="name" placeholder="Full name">
            <input type="text" name="mail" placeholder="Your email">
            <input type="text" name="subject" placeholder="Subject">
            <textarea name="message" placeholder="Message"></textarea>
            <button type="submit" name="submit">SEND EMAIL</button>
        </form>
    </body>
</html>

<?php
include_once 'navbar/footer.php';
?>