<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ZaboR | Forum</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="banner">
            <?php include "navbar.php"; ?>

            <div class="content">
                <h1 class="fade-in">Coming soon</h1>
                <p>Soon there will be a forum here with the ability to post!<br><br>Register to have access!</p>
                <div>
                    <a href="index.php" style="text-decoration: none;">
                        <button type="button"><span></span>HOME</button>
                    </a>
                    <a href="aboutus.php" style="text-decoration: none;">
                        <button type="button"><span></span>ABOUT US</button>
                    </a>
                </div>
            </div>
        </div>
        <?php include "footer.php"; ?>
    </body>
</html>