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
        $address=$_POST['address'];
        $email=$_POST['email'];
        $password=$_POST['password'];
       
        // var_dump($conn);

    }
    $sql= "INSERT INTO `customers`(`name`,`address`,`email`,`password`) VALUES ('$name','$address','$email','$password')";
        if ($conn->query($sql) === TRUE) {
         header('location:http://localhost/rest1/index.php');
         } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
  
    $conn->close();

?>