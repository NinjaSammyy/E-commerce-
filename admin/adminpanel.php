<?php
session_start();
if (empty($_SESSION['email']) && empty($_SESSION['id'])) {
?>
    <html>
    <head>
        <title>Won't Work</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <div class="msg_underoverlay">
        <div class="popup">
            <h3 class="popup_head">Message!</h3>
            <span class="popup_msg">Ah!... You got on a wrong Foot</span><br><br>
            <span class="popup_msg">Try to Login First...!!!</span> 
            <div class="re_loginbtn">
                <button class="primary-btn wrongLogin" onclick="wrongLogin();">Ok</button>           
            </div>
        </div>
    </div>
    <script>
        function wrongLogin() {
            window.location.assign("../login.php");
        }
    </script>
<?php
    exit();
} else {
    include './header.php';
} ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../res/admin.js"></script>
<script src="../res/main.js"></script>