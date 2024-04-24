<?php
session_start();
include 'php/config.php'
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>The Social Media Login or Signup</title>
  <!--Animate CSS-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


  <link rel="shortcut icon" href="../../image/The Social Media.png" type="image/x-icon" />

  <!--Google Fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="login.css" />
  <style>
    .roboto-medium {
      font-family: "Roboto", sans-serif;
      font-weight: 500;
      font-style: normal;
    }
  </style>

  <!--Css Bootstrap added-->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  <!--Font awesome icon-->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body class="roboto-medium">
  <!--Login page header-->

  <!--Navbar-->

  <header>
    <section class="">
      <nav class="navbar navbar-light bg-light">
        <div class="container-fluid d-flex justify-content-around align-items-center">
          <a class="navbar-brand" href="#">
            <!--Nav image-->
            <img src="../../image/Untitled_design-removebg-preview.png" alt="" width="80" class="d-inline-block align-text-top img-fluid" />
            <!--Nav text-->
          </a>
          <span class="fs-1 fw-bold" style="font-family: 'Times New Roman', Times, serif">The Social
            <span style="font-style: italic; color: tomato" class="">Media</span></span>
        </div>
      </nav>
    </section>


    <section class="container">
      <p class="text-center fs-3 mt-5 animate__animated animate__backInDown">Connect, Share, Thrive: Introducing The Social media, Your New Social Networking App</p>
    </section>
  </header>
  <!--main part in login part-->



  <main>

    <div class="d-flex justify-content-center  align-items-center container-fluid mt-5 row">
      <?php
      if (isset($_SESSION['status']) && ($_SESSION['status'] != '')) {
      ?>
        <div class="alert alert-warning" role="alert">
          <strong>Hey!</strong><?php echo $_SESSION['status']; ?>
        </div>

      <?php
        unset($_SESSION['status']);
      }
      ?>
      <?php
      if (isset($_SESSION['email_alert']) && ($_SESSION['email_alert'] != '')) {
      ?>
        <div class="alert alert-warning" role="alert">
          <strong>Hey!</strong><?php echo $_SESSION['email_alert']; ?>
        </div>

      <?php
        unset($_SESSION['email_alert']);
      }
      ?>

             <?php
                  if (isset($_SESSION['Dont_match']) && ($_SESSION['Dont_match'] != '')) {
                  ?>
                    <div class="alert alert-warning" role="alert">
                      <strong>Hey!</strong><?php echo $_SESSION['Dont_match']; ?>
                    </div>
                      <?php
                        unset($_SESSION['Dont_match']);
                      }
                      ?>
      <div class="col-lg-2 col-12 p-3">

        <img width="w-100" class="img-fluid" src="../../image/header-pic.png" alt="">
      </div>
      <div class="col-lg-2 col-12 p-3">
        <div class="card mx-auto" style="width: 18rem;">

        <form action="php/sign_in.php" method="POST">
          <div class="card-body">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" name="email"class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your Email">
              <div class="mt-3" style="font-size: 10px;" id="emailHelp" class="form-text">We'll never share your email with anyone else except [FBI , Sheikh Hasina , East Germany and Kim Jung Un] Sorry We have to do this.</div>
              <?php
                  if (isset($_SESSION['email_empty']) && ($_SESSION['email_empty'] != '')) {
                  ?>
                    <div class="alert alert-warning" role="alert">
                      <strong>Hey!</strong><?php echo $_SESSION['email_empty']; ?>
                    </div>
                      <?php
                        unset($_SESSION['email_empty']);
                      }
                      ?>
           
            </div>

         <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control"  placeholder="Enter your password">
                 <?php
                  if (isset($_SESSION['password_empty']) && ($_SESSION['password_empty'] != '')) {
                  ?>
                    <div class="alert alert-warning" role="alert">
                      <strong>Hey!</strong><?php echo $_SESSION['password_empty']; ?>
                    </div>
                      <?php
                        unset($_SESSION['password_empty']);
                      }
                      ?>

<?php
                  if (isset($_SESSION['wrong_pass']) && ($_SESSION['wrong_pass'] != '')) {
                  ?>
                    <div class="alert alert-warning" role="alert">
                      <strong>Hey!</strong><?php echo $_SESSION['wrong_pass']; ?>
                    </div>
                      <?php
                        unset($_SESSION['wrong_pass']);
                      }
                      ?>
        </div>

            
          </div>

          <div class="card-footer">
           <center>  <button type="submit"  name="login" class="btn btn-primary px-5">Log in</button></center>
          
          </div>
        </form>
              <hr>
              <center>
                <div class="mt-3" style="font-size: 16px;" id="emailHelp" class="form-text">Dont have an Account Join now <span class="text-danger">!</span></div>
              </center>
              <hr>
              <center><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Create New Account
                </button>
              </center>

            </div>
        

        </div>
      </div>
    </div>
  </main>
  <!-- Button trigger modal -->


  <!-- Modal -->

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Sign Up</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="php/register.php" method="POST">
   
          <div class="modal-body">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Email">


            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Enter an amazing password">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Re type your password</label>
              <input type="password" class="form-control" name="confirm_password" id="exampleInputPassword1" placeholder="Re type the Chosen password">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" href="login.php" data-bs-toggle="modal" data-bs-target="#exampleModal" name="create_account" class="btn btn-primary">Welcome To The Social Media</button>
          </div>
        </form>
      </div>
    </div>
  </div>





  <footer class="p-3 mt-5" style="background-color: black; ">
    <p class="text-center" style="color: azure;">All right Reserved</p>
  </footer>



  <!--Bootstrap JS added-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  <script src="login.js"></script>
</body>

</html>
   
