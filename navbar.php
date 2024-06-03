<div class="navbar">
    <a href="index.php">
        <img src="images/logo.png" class="logo">
    </a>
        <ul>
            <li><a href="forum.php">Forum</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <?php 
            
            if (!isset($_SESSION["user"])) {?>
                <li><a href="login.php">Log In</a></li>
                <li><a href="singup.php">Sing Up</a></li>
            <?php
            }
            else{ ?>
                <li style="text-align: center;"><?php echo $_SESSION["user"]?>
                    <div>
                    <a href="logout.php" class="btn btn-warning">Logout</a>
                    </div></li>
            <?php    
            

            }
            ?>
            
            

        </ul>
</div>