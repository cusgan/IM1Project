<header>
  <nav class="navbar navbar-expand-lg navbar-x">
      <a class="navbar-brand active" aria-current="page" href="index.php">
        <img src="./images/KaOnTime Small.svg" alt="">
      </a>
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse align-items-end" id="navbarSupportedContent">
          <ul class="navbar-nav positio-asolue me-auto mb-2 mb-lg-0 ">
            <!-- <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modalLogin" style="font-weight: bold">KaOn-Now!</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modalLogin">Log In</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modalSignup">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modalSignupBusiness">Apply as Business</a>
            </li> -->
            <?php 
            session_start();
            if(isset($_SESSION['fname'])){
              echo '
              <li class="nav-item">
                <a class="nav-link" href="search.php">Browse for Food</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cart.php">View Cart</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="api/logout.php">LogOut</a>
              </li>
              ';
            }
            ?>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</header>