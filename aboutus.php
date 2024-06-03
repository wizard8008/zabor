<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ZaboR | About Us</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>
    <body>
        <div class="banner">
            <?php include "navbar.php"; ?>

            <!-- NAVSYSTEM -->

            <div class="content">
                <h2 class="fade-in">About Us</h2>
                <p>This project is based on the aim of improving feedback to students in the school and facilitating the communication of information about activities!</p>
                <p>If you have any questions or suggestions on how to improve the project, get in touch!</p>

            <div class="creators">
                <div class="creator">
                    <img src="images/avatar1test.jpg" alt="Creator 1">
                    <h3>Artem Chernysh</h3>
                    <div class="social-links">
                        <a href="https://t.me/wizardmq" target="_blank"><i class="fab fa-telegram-plane"></i> Telegram</a>
                        <a href="https://www.instagram.com/artemka4259" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
                    </div>
                </div>
                <div class="creator">
                    <img src="images/avatar2test.jpg" alt="Creator 2">
                    <h3>Sonya Vyshnevetska</h3>
                    <div class="social-links">
                        <a href="https://t.me/nikushimiyui" target="_blank"><i class="fab fa-telegram-plane"></i> Telegram</a>
                        <a href="https://www.instagram.com/sonaahnn" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
                    </div>
                </div>
            </div> 
        </div>
        <?php include "footer.php"; ?>
        <script src="script.js"></script>
    </body>
</html>