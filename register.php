<?php
include "Includes/templates/header.php";
include "Includes/templates/navbar.php";

?>

<form id="form1" action="logic/register.php" method="POST">
  <fieldset>
    <legend>Customer Register</legend>
    <ul>
    <li>
        <label for="name">Enter your Name</label>
        <input type="text" name="name" id="name" placeholder="Enter our Name" required>
        <span class='feedback'></span>
      </li>

      <li>
        <label for="address">Enter your Full address</label>
        <textarea name="address" id="address" cols="30" rows="5" required></textarea>
        <span class='feedback'></span>
      </li>
      <li>
        <label for="user">Enter your email address</label>
        <input type="email" name="email" id="user" placeholder="" required>
        <span class='feedback'></span>
      </li>
      <li>
        <label for="password">Choose a password</label>
        <input type="password" name="password" id="password" required>
        <span class='feedback'></span>
        <div id="hint">Passwords must be 8-15 characters and contain:
          <ul>
            <li>at least one capital letter</li>
            <li>at least one lowercase letter</li>
            <li>at least one number</li>
          </ul>
        </div>
      </li>
      <li>
        <label for="verifyPassword">Re-enter your password</label>
        <input type="password" name="verifyPassword" id="verifyPassword" required>
        <span class='feedback'></span>
      </li>
      <li>
        <input type="submit" name="submit"  id="Button1" value="Register me!">
      </li>
    </ul>
    <p> If You are already member Then LogIn Here !<a href="login.php" class="btn btn-outline-warning">Login</a> </p>
  </fieldset>
</form>
        <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />  
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>  
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/jquery-ui.min.js"></script>  
        <script>  



            $(document).ready(function(){  
              // $("#form1").validate({
              //     validClass: "valid",
              //     rules: {
              //       password: {
              //         required: true,
              //         rangelength: [8, 15],
              //         pattern: "^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}$"
              //       },
              //       verifyPassword: {
              //         equalTo: "#password"
              //       }
              //     }
              //   });
                // $('#Button1').click(function()  { 
                //     $.ajax({  
                //         type: 'POST',  
                //         url: 'logic/register.php',  
                //         data: $('#form1').serialize(),
                //         success: function(response){  
                //           alert('SuccessFull  Registration');
                //           // window.location.replace("index.php");
                //         },  
                //         error: function() 
                //         {  
                //             console.log('there is some error');  
                //         }  
                //     });  
                // });  
            });  
        </script>  
<?php include "Includes/templates/footer.php"; ?>