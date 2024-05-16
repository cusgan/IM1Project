<!DOCTYPE html>
<html lang="en">
<?php require_once 'includes/head.php'; ?>
<body style="padding-bottom: 10rem;">
    <?php require_once("includes/header.php") ?>
    <?php 
    session_start();
    if(!isset($_SESSION['userid'])){
        header("Location: index.php");
    }
    ?>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-3"><br> 
            <h2>Profile Picture</h2><br>

            <!-- displays users current pfp -->
            <div class="text-center">
                <img src="images/default-pfp.png" class="rounded img-fluid" alt="User Profile Picture">
            </div><br>
            
            <!-- for user profile picture upload -->
            <div class="input-group mb-3"> 
                <input type="file" class="form-control" id="inputGroupFile">
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
            </div>

        </div>
        <div class="col-1"></div>
        <div class="col"><br>
            <h2>User Information</h2><br>

            <h3>Username</h3>
            <h5><?php echo $_SESSION["username"]; ?></h5><br>

            <h3>Email</h3>
            <h5><?php echo $_SESSION["email"]; ?></h5><br>

            <h3>Name</h3>
            <h5><?php echo $_SESSION["fname"]; ?>   <?php echo $_SESSION["lname"]; ?></h5>
            <!-- <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">First Name</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            
                <span class="input-group-text" id="inputGroup-sizing-default">Last Name</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            
            </div> -->
            <br>

            <h3>Birthday</h3>
            <h5><?php echo $_SESSION["birthday"]; ?></h5>
            <br>            

            <h3>Address</h3>
            <h5><?php echo $_SESSION["address"]; ?></h5><br>

            <h3>Mobile Number</h3>
            <h5>+63 901 234 5678</h5><br>

            <button type="submit" class="btn btn-secondary">Edit User Info</button>
            <form method="post" action="api/deactivate.php">
                <input type="hidden" name="origin" value="user.php">
                <?php 
                $accid = $_SESSION['accid'];
                echo "<input type=\"hidden\" name=\"accid\" value=\"$accid\">"; ?>
                <button type="submit" class="btn btn-primary">Deactivate my Account</button>
            </form>

        </div>
        <div class="col-1"></div>
    </div>
    
    <?php require_once("includes/footer.php") ?>
</body>
</html>