<?php

if (isset($_POST["submit"])) {
    include_once("connect.php");
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = sha1($_POST["password"]);
    $sqlregister = "INSERT INTO `tbl_admin`(`name`,`email`, `password`) VALUES('$name', '$email', '$pass')";
    try {
        $conn->exec($sqlregister);
        echo "<script>alert('Registration successful')</script>";
        echo "<script>window.location.replace('login.php')</script>";
    } catch (PDOException $e) {
        echo "<script>alert('Registration failed')</script>";
        echo "<script>window.location.replace('register.php')</script>";
        
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster&effect=shadow-multiple">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan Script">
    <title>REGISTER</title>
</head>
<style>
    .w3-lobster {
    font-family: "Lobster", Sans-serif;
    }
    .w3-kaushan{
        font-family: "Kaushan Script";
    }
    p{
        font-family: Poppins;
    }
    @media screen and (min-width: 1920px){
        body {
            max-width: 60%;
            margin: auto;
        }
    }
    @media screen and (min-width: 601px) {
        .form-container{
            max-width: 700px;
            margin: auto;
        }
    }
</style>
<body>
    <div class="w3-header w3-display-container w3-pale-red w3-padding-32 w3-center">
        <h1 class= "w3-text-pink w3-margin-left w3-margin-right w3-kaushan" style="font-size: calc(12px+5vw) ;font-weight:800; line-height: 0.9;";>
            BRIGHTENING BODY<br>SCRUB</h1>
        <p class="w3-lobster w3-text-red" style="font-size: calc(12px+4vw) ;font-weight: 300;">Invest Your Skin a Little Love!
        </p>
    </div>
<div class="w3-padding-64 w3-container w3-light-grey ">
    <div class="w3-card form-container">
        <div class="w3-container w3-center w3-pale-red">
            <h2 class="w3-text-pink w3-lobster">
                New User Registration
            </h2>
        </div>
        <form class="w3-container w3-padding formco" name="registerForm" action="register.php" method="post" onsubmit="return confirmDialog()" enctype="multipart/form-data">
            <p class="w3-text-pink">
                <label>Name</label>
                <input class="w3-input w3-sand w3-border w3-round" name="name" id="name" type="text" required>
            </p>
            <p class="w3-text-pink">
                <label>Email</label>
                <input class="w3-input w3-sand w3-border w3-round" name="email" id="email" type="email" required>
            </p>
            <p class="w3-text-pink">
                <label>Password</label>
                <input class="w3-input w3-sand w3-border w3-round" name="password" id="password" type="password" required>
            </p>
            <div class="row">
                <button class="w3-input w3-border w3-block w3-pink w3-round w3-hover-red" name="submit">REGISTER</button>
            </div>
        </form>
    </div>
    
</div>
<footer class="w3-text-pink w3-container w3-pale-red w3-center" style="font-size: 0.8em;">
        <p>Copyright: Amier Putra<br>All Rights Reserved.</p>
    </footer>
<script>
    function confirmDialog(){
        var r =confirm("Register?");
        if (r==true){
            return true;
        } else {
            return false;
        }
    }
</script>

</body>
</html>