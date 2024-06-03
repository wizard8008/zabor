<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ZaboR</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>
    <body>
        <div class="banner">
            <!--- <div class="navbar">
                <img src="images/logo.png" class="logo">
                <ul>
                    <li><a href="forum.php">Forum</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="login.php">Log In</a></li>
                    <li><a href="singup.php">Sing Up</a></li>
                </ul>
            </div> -->

            <?php include "navbar.php"; ?>

            <!-- NAVSYSTEM -->

            <div class="content">
                <h1 class="fade-in">Welcome!</h1>
                <p>You're on ZaboR news publick!<br><br>Here you can follow upcoming events and completed events in the CSM!</p>
                <div>
                    <a href="upcoming.php" style="text-decoration: none;">
                        <button type="button"><span></span>UPCOMING EVENTS</button>
                    </a>
                    <a href="compleated.php" style="text-decoration: none;">
                    <button type="button"><span></span>COMPLEATED EVENTS</button>
                    </a>
                </div>
            </div>
        <?php include "footer.php"; ?>
        <script src="script.js"></script>
    </body>
</html>