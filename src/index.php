

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Social Media</title>

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="login.css" />
    <style>
      .roboto-medium {
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
      }
      @media only screen and (max-width: 570px) {
        .custom-mediaQueryAccordion{
          background-color: red;
        }
      }
    </style>

    <!--Css Bootstrap added-->

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <!--Font awesome icon-->

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
    <!--Animate CSS-->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <div>
                <?php 
                session_start();
                  if(isset($_SESSION['id'])){
                   echo ' <button class="btn btn-primary"><a style="color:white;text-decoration:none" target="_blank" href="../src/login-signup/php/logout.php">Logout</a></button>';
                    }
                    else{
                      echo ' <button class="btn btn-primary"><a style="color:white;text-decoration:none" target="_blank" href="../src/login-signup/php/logout.php">Login</a></button>';
                    }
                     ?>
               
                  </div>
                <div>
                   <a style="text-decoration:none" target="_blank" href="#"><span
                        class="fs-1 fw-bold"
                        style="font-family: 'Times New Roman', Times, serif"
                        >TS<span style="color: tomato" class="">M</span
                        ></span
                      ></a>
                </div>
                <div>
                 
                    <button class="btn btn-primary"><a target="_blank" style="text-decoration: none;color:white" href="../src/single-user/single_user.html">Your Profile</a></button>
                </div>
               
                  
        
              </div>
            </div>
          </nav>
    </header>
    <main class="mt-4">
        <section class="container">
            <h2>Todays Trending Posts : </h2>
            <!--Article portion-->
            <div class="row">

            <!--Slider-->
            <div  class="mx-auto mt-5 px-2 col-12 col-lg-2">
                <div id="carouselExampleIndicators" class="carousel w-100 slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="../image/balon.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="../image/bean-bag.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="../image/header-pic.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>

            <!--
                Post part
            -->

            <!--media query likhe thik korte hobe-->
           <div class="w-50 mt-5 col-12 col-lg-2 ">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item ">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Accordion Item #1
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Accordion Item #2
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Accordion Item #3
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                  </div>
                </div>
              </div>
           </div>
            </div>

            

        </section>
        


        <section class="container mt-5">
            <article class="container mt-5">
                <h4 class="fw-bold mt-5 mb-5">Recent Posts</h4>

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="p-3 mt-3" style="border: 3px solid black;">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente illum officia iusto cum enim impedit, quo odio ullam doloribus? Eos corporis sed ea eius facere quidem deserunt ut assumenda voluptates similique pariatur alias nulla quibusdam blanditiis, dolorum, ab tenetur.</p>
                    </div>
                  </button>
                
                <div class="p-3 mt-3" style="border: 3px solid black;">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente illum officia iusto cum enim impedit, quo odio ullam doloribus? Eos corporis sed ea eius facere quidem deserunt ut assumenda voluptates similique pariatur alias nulla quibusdam blanditiis, dolorum, ab tenetur.</p>
                </div>
                <div class="p-3 mt-3" style="border: 3px solid black;">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente illum officia iusto cum enim impedit, quo odio ullam doloribus? Eos corporis sed ea eius facere quidem deserunt ut assumenda voluptates similique pariatur alias nulla quibusdam blanditiis, dolorum, ab tenetur.</p>
                </div>
                
                </div>
            </article>

            <div class="mt-5">
                <div class="d-flex justify-content-center align-items-center">

                    <div>
                        <textarea name="" id="" cols="30" rows="2" class="text-center px-3 mt-4" placeholder="Now Whats's in Your mind"></textarea>
                    </div>
                    <div>
                        <button class="btn btn-primary ms-2">Share</button>
                    </div>
                    </div>
            </div>
        </section>
    </main>
    <footer class="p-3 mt-5" style="background-color: black; ">
        <p class="text-center" style="color: azure;">All right Reserved</p>
      </footer>









      <!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Posted By : </h5>
          
        </div>
        <div class="modal-body">
            <img id="" class=" mt-4 img-fluid rounded-circle" style="width: 120px;" src="../../image/doggo.png" alt="">
            <h3 class="mt-3 fw-bolder "><span>Mr. Doggesh</span> <span class="fw-light h5">(Doggo)</span></h3> 
            <span>194 Followers</span>
            <br>
            <a class="btn btn-primary mt-2" href="">See Followers</a>
            
            <a class=" ms-1 btn btn-primary mt-2" href="">Following</a>
            <a class=" ms-1 btn btn-primary mt-2" href="../src/single-user/single_user.html">See Profile</a>
             <p class="text-center mt-4 px-3 mb-5"><span>🐶 Spreading smiles one wag at a time , ✉️ DM for belly rub appointments
                
             </span></p>

             




             <hr>


             <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente non voluptatibus ab eveniet explicabo alias temporibus suscipit earum modi tenetur eius ad molestias odit provident, perferendis labore aliquam quia eaque incidunt, deserunt eum reiciendis obcaecati ex autem. Porro, repellendus voluptate.</p>
             <button class="btn"><i style="color: red;" class="fs-1 fa-solid fa-heart"></i></button>

             <button class="btn"><i style="color: blue;" class="fs-1 fa-solid fa-comment"></i></button>

             
        </div>
       
      </div>
    </div>
  </div>






    <!--Bootstrap JS added-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
</body>
</html>