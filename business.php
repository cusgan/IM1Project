<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Menu Editor
    </title>
	<!-- Bootstrap CSS v5.2.1 -->
	<link
		href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
		rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
		crossorigin="anonymous"
	/>
	<link rel="stylesheet" href="css/styles.css">
	<!-- Bootstrap JavaScript Libraries -->
	<script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
</head>
<body style="padding-bottom: 10rem;">
    <?php 
    session_start();

    require_once("includes/header.php"); 
    require_once('includes/login.php'); 
    require_once('includes/signup.php');
    require_once('includes/signupbusiness.php'); 
    // if(!isset($_SESSION['userid'])){
    //     header("Location: index.php");
    // }
    include_once("api/connect.php");
    $business_id = $_SESSION['businessid'];
    //$business = mysqli_fetch_array(mysqli_query($connection,"select * from tblbusiness where businessid='".$business_id."'"));
    $business_name = $_SESSION['bname'];
    $business_desc = $_SESSION['bdesc'];
    $business_addr = $_SESSION['baddr'];

    $menu = mysqli_fetch_array(mysqli_query($connection,"select * from tblmenu where businessid='".$business_id."'"));
    $menu_id   = $menu[0];
    $_SESSION['menuid'] = $menu_id;
    $menu_desc = $menu[2];
    
    $items = array();
    $item = 1;
    $item_ctr = 0;
    $item_res = mysqli_query($connection,"select * from tblmenuitem where menuid='".$menu_id."'");
    while($item = mysqli_fetch_array($item_res)){
        // if($item == null){
        //     break;
        // }
        array_push($items, $item);
        $item_ctr = $item_ctr + 1;
    }
    // while ($row = mysql_fetch_assoc($result)) {
    //     echo $row["userid"];
    //     echo $row["fullname"];
    //     echo $row["userstatus"];
    // }

    

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
            <a class="btn btn-success" href="#" data-bs-toggle="modal" data-bs-target="#modalAddItem"> 
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16" style="margin-top:-5px;">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
                </svg><i class="bi bi-plus-circle-fill"></i>
                Add New Menu Item</a>
            <div class="modal fade" id="modalAddItem" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <form method="post" action="api/additem.php">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Item to Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            
                            <?php echo '<input type="hidden" id="menuid" name="menuid" value="'.$menu_id.'">'?>
                            <!-- <img src="images\default-image.png" class="img-thumbnail" alt="name of item here" style = "width:30%;"> -->
                            <label for="addItemName" class="form-label">Item Name: </label>
                            <input type="text" name="inptItemName" class="form-control" id="addItemName" aria-describedby="addItemName" placeholder="Enter item name...">
                            <label for="addItemDescription" class="form-label">Item Description: </label>
                            <input type="text" name="inptDescription" class="form-control" id="addItemDescription" aria-describedby="addItemDescription" placeholder="Enter item description...">
                            <label for="quantity" class="form-label">Quantity:</label>
                            <input type="number" class="form-control" name="inptStock" id="input2" placeholder="Enter quantity...">
                            <label for="price" class="form-label">Price: </label>
                            <input type="number" class="form-control" name="inptPrice" id="input1" placeholder="Enter price...">

                            <label for="image" class="form-label">Item Image: </label>
                            <div class="input-group mb-3">
                            <input type="file" class="form-control" name="itemimg" id="image" accept=".png, .jpeg, image/png, image/jpeg" >
                            <label class="input-group-text" for="image">Upload</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add to Menu</button>
                    </div>
                </form>
                </div>
                </div>
            </div>

        </div>
        <div class="col-1"></div>
        <div class="col"><br>
            <h2>Menu</h2><br>
            <p><?php echo $menu_desc;?></p>
            <div class="row">
                <div class="col"></div>
            </div>
        

            <?php 
            include_once 'api/menuitem.php'; 
            for($i = 0; $i < $item_ctr; $i++){
                displayItem($items[$i][0],$items[$i][1],$items[$i][2],$items[$i][3],$items[$i][4],$items[$i][5]);
                // echo "a ";
                // print_r($items[$i]);
            }
            ?>
<!--             
            <a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#modalMenuItem">Menu Item</a> -->
            

        </div>
        <div class="col-1"></div>
    </div>
    
    <?php require_once("includes/footer.php") ?>
</body>
</html>