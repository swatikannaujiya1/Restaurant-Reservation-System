<?php 
    
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "restaurant_website";
   
          $conn =  mysqli_connect($servername, $username, $password,$dbname);
  
  
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
   
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];
       
    }
    $sql= "INSERT INTO `contact`(`name`,`email`,`subject`,`message`) VALUES ('$name','$email','$subject','$message')";
        if ($conn->query($sql) === TRUE) {
         header('location:http://localhost/rest1/index.php');
         } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
  
    $conn->close();

?>