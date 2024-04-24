 <?php
$servername = "localhost";
$username = "root";
$password = "";
$db="social_media";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
      session_start(); 
     if (isset($_POST['create_account'])) {
   
                $email = $_POST['email'];
                 $password = $_POST['password'];
                 $confirm_pass = $_POST['confirm_password'];

                  if (empty($email) || empty($password)) {
                  $_SESSION['status']='all filed required ';
                  header('location:../login.php');
                           }
                  if ($password !== $confirm_pass) {
                   $_SESSION['status']='password doesnt match';
                   header('location:../login.php');
                     }
  
  
    
                else {
                    //    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

                       if($email != "") {
                        $sql = "SELECT *FROM registeration where email='$email'";
                        $result=mysqli_query($conn,  $sql);
                        $fetch=mysqli_num_rows($result);
                        
                        if($fetch>0)
                        {
                            $_SESSION['email_alert']='This Email Already Exist';
                            header('location:../login.php');
                         
                        }
                      
                        else
                        {
                            $insert_query="INSERT INTO registeration(`email`, `password`) VALUES ('$email', '$password')";
                            $insert_query_db=mysqli_query($conn, $insert_query);
                             if( $insert_query_db){
                                $_SESSION['status']='Create Account Successfully';
                                 header('location:../login.php');
                                  }

                            else{
                                $_SESSION['status']='Opps! Something Wrong';
                                 header('location:../login.php');
                                 }
                         }
                        }}
                          
      }
?>

 
