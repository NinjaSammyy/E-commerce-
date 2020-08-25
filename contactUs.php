<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="contactBg">
<div class="container""> 
 
  <form id="contact" name="contactUs" method="post">
    <h3>Quick Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <div class="error-box" style="margin:1rem 0rem;">
        <span id="error"></span>    
    </div>
    <fieldset>
      <input name="cus_name" placeholder="Your name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input name="cus_email" placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <textarea name="cus_msg" placeholder="Type your Message Here...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
 
  
</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="res/admin.js"></script>

</html>