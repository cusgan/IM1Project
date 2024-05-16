<!doctype html>
<html lang="en">
    <?php require_once 'includes/head.php'; ?>
<!-- hello -->
    <body>
        <?php include_once 'includes/header.php'; ?>
        <main>
            <?php require_once 'includes/login.php'; ?>
            <?php require_once 'includes/signup.php'; ?>
            <?php require_once 'includes/signupbusiness.php'; ?>

          <!--Landing-->
          <div class="row container-fluid justify-content-evenly">
          <!-- Carousel -->
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="width: 50%;">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/big-burger.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption carousel-caption-top d-none d-md-block">
                  <h1>Food. In an Instant.</h1>
                  <h5>Get some burgers or something</h5>
                  <p>ooooooooooo i love burgers yummmmmmm mhmmmmm.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/big-fries.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Fries and Chicken.</h5>
                  <p>Wow wow delicious.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/big-pizza.jpg" class="d-block w-100" alt="..." style="box-shadow: inset 5em 1em gold;">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Pizza.</h5>
                  <p>Onlny the best pizza in the world is the pizza ever.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <!--Main Info-->
          <div class="p-5 mb-4 bg-light rounded-3" style="width: 50%">
            <div class="container-fluid py-5">
              <h1 class="display-5 fw-bold">Food Delivery </h1>
              <p class="col-md-8 fs-4">
                We deliver the food to you and you eat the food 
                Why do they call it oven when you of in the cold food of out hot eat the food? <br><br>
                So what are you waiting for?
                Order Now !
              </p>
              <button class="btn btn-primary btn-lg" type="button">
                Order Food
              </button>
            </div>
          </div>
          
          
        </div>
        </main>
        <footer><?php require_once 'includes/footer.php'; ?></footer>
        <!-- Bootstrap JavaScript Libraries -->
    </body>
</html>
