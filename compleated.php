<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ZaboR | Completed events</title>
        <link rel="stylesheet" href="css/events.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    </head>
    <body>
        <div class="banner">
            <?php include "navbar.php"; ?>

            <div>
                <h1 class="animate-text">COMPLEATED EVENTS</h1>
            </div>
            <div>
                <ol class="rectangle">
                    <li><a href="#">Lanparty <span class="date">12.04.24 - 13.04.24</span></a></li>
                    <li><a href="#">none<span class="date">00.00.0000</span></a></li>
                    <li><a href="#">none<span class="date">00.00.0000</span></a></li>
                  </ol>
            </div>
            
        <div class="conteiner">
                <!-- Slider main container -->
                <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><img src="images/aston-martin.jpg"></div>
                <div class="swiper-slide"><img src="images/audi-rs-e-tron-gt.jpg"></div>
                <div class="swiper-slide"><img src="images/maserati-mc20.jpg"></div>
                <div class="swiper-slide"><img src="images/nio-et5.jpg"></div>
                
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
            const swiper = new Swiper('.swiper', {
            // Optional parameters
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            });
        </script>
            <?php include "footer.php"; ?>
    </body>
</html>