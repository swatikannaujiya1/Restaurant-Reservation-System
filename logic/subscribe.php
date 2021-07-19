<?php 
    
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "restaurant_website";
   
          $conn =  mysqli_connect($servername, $username, $password,$dbname);
  
  
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
   
    if(isset($_POST['submit']))
    {
        
        $name=$_POST['name'];
        $email=$_POST['email'];
        
        
       
    }
    $sql = "INSERT INTO subscribe (`name`,`email`) VALUES ('$name','$email')";
        if ($conn->query($sql) === TRUE)
         {
         header('location:http://localhost/rest1/index.php');
         } else 
         {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
  
    $conn->close();
    include "mail.php";

?>
