<?php
    include 'adminfunction.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    

    <form name="loginform" method="POST">
        <div class="logo">
            <img src="icons/6660ab32-adf9-40db-ace2-f4fb67b6b86d_200x200.png" alt="demonLogo" width="80px">
            <span>BETA</span>
        </div>
        <div class="error-box">
            <span id="error"></span>
        </div>
        <div class="field">
            <input type="email" placeholder="Email" name="email">
            <i class="fa fa-user" aria-hidden="true"></i>
        </div>
        <div class="field">
            <input type="text" placeholder="Password" name="password">
            <i class="fa fa-key" aria-hidden="true"></i>
        </div>
        <input type="submit" name="submit"/>
        <a href="#">Forgot Password? <strong>or</strong> Signup?</a>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="res/admin.js"></script>
</body>

</html>