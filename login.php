<?php
if (isset($_POST["submit"])) {
    include 'connect.php';
    $email = $_POST["email"];
    $pass = sha1($_POST["password"]);
    $stmt = $conn->prepare("SELECT * FROM tbl_admin WHERE email = '$email' AND password = '$pass'");
    $stmt->execute();
    $number_of_rows = $stmt->fetchColumn();
    if ($number_of_rows > 0){
        echo "<script>alert('Login Success');</script>";
        echo "<script> window.location.replace('mainpage.php')</script>";
    }else {
        echo "<script>alert('Login Failed');</script>";
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
    <title>Login</title>
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
            max-width: 500px;
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

    <div class=" w3-light-grey w3-container w3-padding-64 ">
        <div class="w3-card-4 w3-round form-container">
            <div class="w3-text-pink w3-container w3-round w3-pale-red w3-center">
                <h2 class="w3-lobster"><b>Login</b></h2>
            </div>
            <form name="login" class="w3-container" action="login.php" method="post">
                <p>
                    <label class="w3-text-pink"><b>Email</b></label>
                    <input class="w3-input w3-sand w3-border w3-round" name="email" type="email" id="email" required>
                </p>
                <p>
                    <label class="w3-text-pink"><b>Password</b></label>
                    <input class="w3-input w3-sand w3-border w3-round" name="password" type="password" id="password" required>
                </p>
                <p>
                    <button class="w3-text-pale-red w3-btn w3-round w3-pink w3-hover-red w3-block" name="submit">
                        LOGIN
                    </button>
                </p>
                <p class="w3-center">
                    Do not have an account yet? <a href="register.php" style="color: red">REGISTER HERE</a>
                </p>
            </form>
        </div>
    </div>

    <footer class="w3-text-pink w3-container w3-pale-red w3-center" style="font-size: 0.8em;">
        <p>Copyright: Amier Putra<br>All Rights Reserved.</p>
    </footer>
</body>
</html>