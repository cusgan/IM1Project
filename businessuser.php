<!DOCTYPE html>
<html lang="en">
<?php require_once 'includes/head.php'; ?>
<body style="padding-bottom: 10rem;">
    <?php 

    require_once("includes/header.php"); 
    require_once('includes/login.php'); 
    require_once('includes/signup.php');
    require_once('includes/signupbusiness.php'); 
    // if(!isset($_SESSION['userid'])){
    //     header("Location: index.php");
    // }
    include_once("api/connect.php");
    $business_id = 7;
    //$business = mysqli_fetch_array(mysqli_query($connection,"select * from tblbusiness where businessid='".$business_id."'"));
    $business_name = 'fart';
    $business_desc = 'fart desc';
    $business_addr = 'fart address';

    $menu = mysqli_fetch_array(mysqli_query($connection,"select * from tblmenu where businessid='".$business_id."'"));
    $menu_id   = $menu[0];
    $_SESSION['menuid'] = $menu_id;
    $menu_desc = $menu[2];
    
    $items = array();
    $item = 1;
    $item_ctr = 0;
    $item_res = mysqli_query($connection,"select * from tblmenuitem where menuid='".$menu_id."'");
    while($item = mysqli_fetch_array($item_res)){
        array_push($items, $item);
        $item_ctr = $item_ctr + 1;
    }

    

    ?>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-3"><br> 

            <!-- displays users current pfp -->
            <div class="text-center">
                <img src="images/default-pfp.png" class="rounded img-fluid" alt="User Profile Picture">
            </div><br>
            <h2><?php echo $business_name;?></h2>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                <path d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z"/>
                </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z"/>
                </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z"/>
                </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z"/>
                </svg>
            <br><br>
            <p><?php echo $business_desc;?></p>
            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16" style="margin-top:-5px;">
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                </svg> <?php echo $business_addr;?>  </p>
        
            

            <!-- <button type="button" class="btn btn-primary">Add New Menu Item</button> -->
        
            <a class="btn btn-secondary w-75" href="#" data-bs-toggle="modal" data-bs-target="#modalAddReview"> Add a Review </a>

            <div class="modal fade" id="modalAddReview" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Leave a Review</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div
                            class="row justify-content-center align-items-center g-2"
                        >
                            <div class="col">
                                <label for="rating" class="form-label">My Rating:</label>
                            </div>
                            <div class="col">
                                <input type="number" min="0" max="5" step="0.5" class="form-control" name="rating" id="input2" placeholder="Enter rating..." value="[]">
                            </div>
                        </div>
                        <label for="comment" class="form-label">Comment: </label>
                        <input type="text" name="comment" class="form-control" id="addItemName" aria-describedby="addItemName" placeholder="How was your experience?" value="">
                                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Post Review</button>
                    </div>
                    </div>
                </div>
            </div>
            
            

        </div>
        <div class="col-1"></div>
        <div class="col"><br>
            <!-- <h2>Menu</h2><br>
            <p>< echo $menu_desc;?></p> -->
            <div class="row">
                <div class="col"></div>
            </div>
        

            <ul class="nav nav-pills nav-fill">
                        <li class="nav-item">
                            <a class="nav-link active tabletab" aria-current="page" data-bs-toggle="pill" data-bs-target="#report1" href="#pills-home">Menu</a>
                        </li>
                        <li class="nav-item tabletab">
                            <a class="nav-link" data-bs-toggle="pill" data-bs-target="#report2" href="#pills-profile">Reviews</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent"><br>
                        <!-- first tab -->
                        <div class="tab-pane fade show active" id="report1" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            menu here
                            
                        </div>
                        <!-- second tab -->
                        <div class="tab-pane fade" id="report2" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><b>4 stars</b></h5>
                                    <h6 class="card-title">Username</h6>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>

                        </div>
                    </div>
<!--             
            <a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#modalMenuItem">Menu Item</a> -->
            

        </div>
        <div class="col-1"></div>
    </div>
    
    <?php require_once("includes/footer.php") ?>
</body>
</html>