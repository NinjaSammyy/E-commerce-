<?php

    session_start();
    include 'admin/adminfunction.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="Question_box">
        <div class="forgot_passsword_nochange">
            <h2>Forgot Password?</h2>
            <img src="img/icons/boy.svg" alt="boysmart">
        </div>
        <div class="error-box">
            <span id="error"></span>
        </div>
        <form name="emailCheck" class="q1" method="POST">
            <p>Kindly Please Enter your email Address</p>
            <span class="smalltitle">We will check if the account exists or not</span>
            <input class="inputEmail" name="existemail" type="email" placeholder="Email Address">
            <input type="submit" class="primary-btn formNbtn" value="send">
        </form>

        <form name="keycheck" class="q2" method="POST">
            <p>Kindly Please enter your Nickname</p>
            <span class="smalltitle">We will check and notify you...!</span>
            <input class="inputEmail" name="nickname" type="text" placeholder="Enter Nickname">
            <input type="submit" class="primary-btn formNbtn" value="submit">
        </form>

        <form name="updatePassword" class="q3" method="POST" hidden>
            <input type="text" name="validMail" value="<?php echo $_SESSION['email']?>" >
            <p>Please Enter New Password</p>
            <span class="smalltitle">We will update your Password!</span>
            <input class="inputEmail" name="password" type="password" placeholder="Enter New Password">
            <input class="inputEmail" name="cpassword" type="text" placeholder="Enter New Password">
            <input type="submit" class="primary-btn formNbtn" value="Confirm">
        </form>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="res/admin.js"></script>

</html>