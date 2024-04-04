<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
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
    <?php require_once("includes/header.php") ?>
    <?php 
    // if(!isset($_SESSION['userid'])){
    //     header("Location: index.php");
    // }
    session_start();
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

            <button type="button" class="btn btn-primary">Edit User Info</button>

        </div>
        <div class="col-1"></div>
    </div>
    
    <?php require_once("includes/footer.php") ?>
</body>
</html>