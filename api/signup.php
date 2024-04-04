<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
	<!-- Bootstrap CSS v5.2.1 -->
	<link
		href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
		rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
		crossorigin="anonymous"
	/>
	<link rel="stylesheet" href="css/styles.css">
	
</head>
<body>
<?php
    header( "refresh:4; url=../index.php" ); 
    include_once('connect.php');
    $email = $_POST["inptEmail"];
    $name = $_POST["inptName"];
    $fName = $_POST["inptFirstName"];
    $lName = $_POST["inptLastName"];
    $address = $_POST["inptAddress"];
    //$password = password_hash($_POST["inptPassword"], PASSWORD_DEFAULT); 
    $password = base64_encode($_POST["inptPassword"]);
    $type = 1;
    $bday = $_POST["inptBirthDate"];
    $gender = 1;


  //CHECK USERNAME IF IN USE
  $countUName = mysqli_num_rows(mysqli_query($connection,"select * from tblAccount where name='".$name."'"));
  if($countUName>0) {
    $big = "Invalid Sign Up !";
    $mid = "Username already in use";
    $sml = "Returning to Main Page...";
		$fce = "<style> .between-smile { display: none !important; } </style>";
  } else {
    $sql1 = "insert into tblAccount(email,name,password,type) 
    values('".$email."','".$name."','".$password."','".$type."')";
    //mysqli_query($connection, $sql1);
    if ($connection->query($sql1) === TRUE) {
        $accid = $connection->insert_id;
      } else {
        echo "Error: " . $sql1 . "<br>" . $connection->error;
    }
    $sql2 = "insert into tblUser(accid,firstname,lastname,address,birthdate) 
    values('".$accid."','".$fName."','".$lName."','".$address."','".$bday."')";
    //mysqli_query($connection, $sql2);
    if ($connection->query($sql2) === TRUE) {
        $userid = $connection->insert_id;
      } else {
        echo "Error: " . $sql2 . "<br>" . $connection->error;
    }
    $sql3 = "UPDATE tblaccount
    SET userid = ".$userid."
    WHERE accid = ".$accid.";";
    mysqli_query($connection, $sql3);
    // echo "<script language='javascript'>
		// 		alert('Successfully Signed Up! Welcome ".$name."');
		// 		</script>";
    $big = "Successfully signed up!";
    $mid = "You can now log in with your details.";
    $sml = "Returning to Main Page...";
		$fce = "<style> .between-frown { display: none !important; } </style>";
  }
    
  
  ?>
  <?php echo $fce ?>
  <div class="position-absolute top-50 start-50 translate-middle">    
    <svg class="rounded mx-auto d-block between-smile"
      xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
      <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.5 3.5 0 0 0 8 11.5a3.5 3.5 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5m4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5"/>
    </svg>
    <svg class="rounded mx-auto d-block between-frown"
      xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="currentColor" class="bi bi-emoji-frown" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
      <path d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.5 3.5 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.5 4.5 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5m4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5"/>
    </svg>
    <br>
    <h1 class="text-center"><?php echo $big; ?></h1><hr>
    <h3 class="text-center"><?php echo $mid; ?></h3>
    <h4 class="text-center"><i><?php echo $sml; ?><i></h4><br>
    <div class="spinner-border mx-auto d-block" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>

  <!-- <div class="position-absolute top-50 start-50 translate-middle">    
    <svg class="rounded mx-auto d-block"
      xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="currentColor" class="bi bi-emoji-frown" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
      <path d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.5 3.5 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.5 4.5 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5m4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5"/>
    </svg><br>
    <h1 class="text-center">Signup Unsuccessful</h1><hr>
    <h3 class="text-center">Please try again</h3>
  </div> -->


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
</body>
</html>