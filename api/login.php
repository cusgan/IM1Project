<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Log in</title>
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
<body>
<?php
  	header( "refresh:2; url=../user.php" ); 
	include_once("connect.php");
	$inpt = $_POST['inptEmailUsername'];
	//$pwd = $_POST['inptPassword']; 
    $pwd = base64_encode($_POST["inptPassword"]);
	$sql ="select * from tblAccount where email='$inpt'";
	$sql2="select * from tblAccount where name='".$inpt."'";
	$resultuname = mysqli_query($connection,$sql2);
	$resultemail = mysqli_query($connection,$sql);
	$countEmail = mysqli_num_rows($resultemail);
	$countUName = mysqli_num_rows($resultuname);
	$row = mysqli_fetch_array($resultemail);
    session_start();
	if ($countEmail != 0) {
		$row = mysqli_fetch_array($resultemail);
	} else if ($countUName != 0){
		$row = mysqli_fetch_array($resultuname);
	}
	if (($countEmail == 0 && $countUName == 0) || ($row[5] != $pwd)){
		// echo "<script language='javascript'>
		// 		alert('Incorrect password');
		// 		</script>";
		$big = "Could not log in !";
		$mid = "Invalid Username/Email or Password.";
		$sml = "Going back to main page...";
		$fce = "<style> .between-smile { display: none !important; } </style>";
		$_SESSION['invalidlogin'] = true;
	} else {
		
		$_SESSION['invalidlogin'] = false;
		$_SESSION['accid'] = $row[0];
		$_SESSION['userid'] = $row[4];
		$_SESSION['username'] = $row[2];
		$_SESSION['email'] = $row[1];
		if($row[3] == 1){
			$userinfo = mysqli_fetch_array(mysqli_query($connection, "select * from tblUser where userid=".$_SESSION['userid']));
			$_SESSION['fname'] = $userinfo[2];
			$_SESSION['lname'] = $userinfo[3];
			$_SESSION['address'] = $userinfo[4];
			$_SESSION['birthday'] = $userinfo[5];
			$big = "Successfully logged in!";
			$mid = "Welcome back, ".$row[2];
			$sml = "Taking you to your profile...";
			$fce = "<style> .between-frown { display: none !important; } </style>";
		} else if ($row[3] == 2) {
			$businfo = mysqli_fetch_array(mysqli_query($connection, "select * from tblBusiness where businessid=".$_SESSION['userid']));
			$_SESSION['businessid'] = $row[4];
			$_SESSION['bname'] = $businfo[2];
			$_SESSION['bdesc'] = $businfo[3];
			$_SESSION['baddr'] = $businfo[4];
			$big = "Successfully logged in!";
			$mid = "Welcome back, ".$businfo[2];
			$sml = "Taking you to your menu view...";
			$fce = "<style> .between-frown { display: none !important; } </style>";
			header( "refresh:2; url=../business.php" ); 
		}

		// echo "<script language='javascript'>
		// 		alert('Successfully log in ! ! ! ! ! ! Welcome ".$_SESSION["username"]."');
		// 		</script>";
		$big = "Successfully logged in!";
		$mid = "Welcome back, ".$row[2];
		$sml = "Taking you to your profile...";
		$fce = "<style> .between-frown { display: none !important; } </style>";
	}
	?>
	<?php echo $fce; ?>
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


</body>
</html>