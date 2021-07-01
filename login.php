<?php

include "Includes/templates/header.php";
include "Includes/templates/navbar.php";

        ?>

<form id="form1" action="" method="POST">
  <fieldset>
    <legend>LogIn</legend>
    <ul>
      <li>
        <label for="user">Enter your email address</label>
        <input type="email" name="username" id="user" placeholder="user@email.com" required>
        <span class='feedback'></span>
      </li>
      <li>
        <label for="password">Choose a password</label>
        <input type="password" name="password" id="password" required>
        <span class='feedback'></span>
      </li>
      <li>
        <input type="submit" name="customer_login"value="Login me!" id="Button1">
      </li>
    </ul>
    <p> If You are not member Then Register  Here !<a href="register.php" class="btn btn-outline-warning">Register</a> </p>
  </fieldset>
</form>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />  
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>  
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/jquery-ui.min.js"></script>  
<script>

   $(document).ready(function(){
        $('#Button1').click(function()  { 
            $.ajax({  
                type: 'POST',  
                url: 'logic/login.php',  
                data: $('#form1').serialize(),
                success: function(response){  
                  alert('SuccessFull  Login');
                  window.location.replace("index.php");
                },  
                error: function() 
                {  
                  alert('Username Or Password is wrong. ! Please try Again !');
                }  
            });  
        });  
});
</script>
<?php include "Includes/templates/footer.php"; ?>