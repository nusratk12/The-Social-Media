<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db="social_media";
        // Create connection
        $conn = new mysqli($servername, $username, $password,$db);
        
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        $result = mysqli_query($conn,"SELECT * FROM registeration WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["email"] = $row['email'];
        } 
        else {
         $message = "Invalid Username or Password!";
        }
    }
       if(isset($_SESSION["id"])) {
             header("Location:../../index.php");
             }
        else{
                $_SESSION['email_alert']='Email And Password Dont Match';
              header('location:../login.php');
     
          }
?>