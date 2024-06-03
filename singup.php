<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ZaboR | Sing Up</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="css/registration.css">
        <!-- <link rel="stylesheet" href="style.css"> -->

    </head>
    <body>
        <div class="banner">
            <?php include "navbar.php"; ?>

            <?php
                if (isset($_POST["submit"])) {
                $fullName = $_POST["fullname"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $passwordRepeat = $_POST["repeat_password"];
                

                //https://www.php.net/manual/en/function.password-hash.php

                $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                $errors = array();
                
                if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
                    array_push($errors,"All fields are mandatory");
                }

                //https://www.php.net/manual/en/function.filter-var.php

                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    array_push($errors, "Email not valid");
                }
                if (strlen($password)<8) {
                    array_push($errors,"Password must be at least 8 characters");
                }
                if ($password!==$passwordRepeat) {
                    array_push($errors,"Password does not match");
                }
                require_once "database.php";
                $sql = "SELECT * FROM users WHERE email = '$email'";
                $result = mysqli_query($conn, $sql);
                $rowCount = mysqli_num_rows($result);
                if ($rowCount>0) {
                    array_push($errors,"The email already exists");
                }
                if (count($errors)>0) {
                    foreach ($errors as  $error) {
                        echo "<div class='alert alert-danger'>$error</div>";
                    }
                }else{
                    
                    $sql = "INSERT INTO users (full_name, email, password) VALUES ( ?, ?, ? )";
                    $stmt = mysqli_stmt_init($conn);
                    $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
                    if ($prepareStmt) {
                        mysqli_stmt_bind_param($stmt,"sss",$fullName, $email, $passwordHash);
                        mysqli_stmt_execute($stmt);
                        echo "<div class='alert alert-success'>You are registered successfully</div>";
                    }else{
                        die("Something went wrong");
                    }
                }
                

                }
                ?>
                <div class="container" style="margin-bottom: 110px;">
                    
                    <form action="singup.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="fullname" placeholder="Username:">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="E-mail:">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password:">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="repeat_password" placeholder="Repete a Password:">
                        </div>
                        <div class="form-btn">
                            <input type="submit" class="btn btn-primary" value="Submit" name="submit">
                        </div>
                    </form>
                    <div>
                    <div><p style="margin-top: 20px;">Already have an account? <a href="login.php">Log in!</a></p></div>
                  </div>
                </div>
        <?php include "footer.php"; ?>
    </body>
</html>