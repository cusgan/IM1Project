<!DOCTYPE html>
<html lang="en">
<?php require_once 'includes/head.php'; ?>
<body style="padding-bottom: 10rem;">
    <?php 
    //session_start();
    $search_query = "";
    if(isset($_POST['search_query'])) {
        $search_query = $_POST['search_query'];
        unset($_POST['$search_query']);
    }
    require_once("includes/header.php"); 
    require_once('includes/login.php'); 
    require_once('includes/signup.php');
    require_once('includes/signupbusiness.php'); 
    include_once("api/connect.php");
    $items = array();
    $item = 1;
    $item_ctr = 0;
    if($search_query == "")
        $item_res = mysqli_query($connection,"SELECT * from tblmenuitem");
    else
        $item_res = mysqli_query($connection,"SELECT * from tblmenuitem WHERE itemname LIKE '%".$search_query."%'");
        
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
        <div class="col"><br>
            <h2>Cart</h2><br>
            <p>This is a list of your Items.</p>
            <div class="row">
                <div class="col"></div>
            </div>
        

            <?php 
            $citems = array();
            $citem = 1;
            $citem_ctr = 0;
            $userid = $_SESSION['userid'];
            $citem_res = mysqli_query($connection,"select cartitemid,tblcartitem.itemid,tblcartitem.userid,itemname,itemdesc,cartqty,buyprice from tblcartitem,tblmenuitem where userid='".$userid."' AND tblcartitem.itemid=tblmenuitem.itemid");
            while($citem = mysqli_fetch_array($citem_res)){
                // if($item == null){
                //     break;
                // }
                array_push($citems, $citem);
                $citem_ctr = $citem_ctr + 1;
            }
            include_once 'api/menuitem.php'; 
            for($i = 0; $i < $citem_ctr; $i++){
                displayCartItem($citems[$i][0],$citems[$i][1],$citems[$i][2],$citems[$i][3],$citems[$i][4],$citems[$i][5],$citems[$i][6]);
                // echo "a ";
                // print_r($items[$i]);
            }
            ?>
<!--             
            <a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#modalMenuItem">Menu Item</a> -->
            

        </div>
        <div class="col-1"><br> 
            

            <!-- <a class="btn btn-success" href="#" data-bs-toggle="modal" data-bs-target="#modalAddItem"> 
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16" style="margin-top:-5px;">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
                </svg><i class="bi bi-plus-circle-fill"></i>
                Add New Menu Item</a>
            <a class="btn btn-secondary" href="businessreport.php"> Open business report </a> -->
            

        </div>
        
        <div class="col"><br>
            <h2>Search for Items</h2><br>
            <div class="mb-3">
                <form method="post" action="search.php">
                    <label for="" class="form-label">Name</label>
                    <?php
                        echo
                        '<input
                            type="text"
                            class="form-control"
                            name="search_query"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            value="'.$search_query.'"
                        />';
                    ?>
                    <button type="submit" class="btn btn-primary">Search</button>
                <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
                </form>
            </div>
            
            <div class="row">
                <div class="col"></div>
            </div>
        

            <?php 
            include_once 'api/menuitem.php'; 
            for($i = 0; $i < $item_ctr; $i++){
                displaySearchItem($items[$i][0],$_SESSION['userid'],$items[$i][2],$items[$i][3],$items[$i][4],$items[$i][5]);
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