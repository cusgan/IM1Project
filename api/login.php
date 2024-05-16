<?php
  	header( "refresh:2; url=../user.php" ); 
	include_once("connect.php");
	$inpt = $_POST['inptEmailUsername'];
	//$pwd = $_POST['inptPassword']; 
    $pwd = base64_encode($_POST["inptPassword"]);
	$sql1 ="SELECT * from tblAccount where email='".$inpt."'";
	$sql2 ="SELECT * from tblAccount where name='".$inpt."'";
	$resultemail = mysqli_query($connection,$sql1);
	$resultuname = mysqli_query($connection,$sql2);
	$countEmail = mysqli_num_rows($resultemail);
	$countUName = mysqli_num_rows($resultuname);
	$row = ["ass","aa","aaaa","sssss","asss","sdad"];
	//$row = mysqli_fetch_array($resultemail); // <-- this breaks login with email for some reason
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
		$smile = false;
		$_SESSION['invalidlogin'] = true;
		header( "refresh:2; url=../index.php" ); 
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
			$smile = true;
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
			$smile = true;
			header( "refresh:2; url=../business.php" ); 
		}

		// echo "<script language='javascript'>
		// 		alert('Successfully log in ! ! ! ! ! ! Welcome ".$_SESSION["username"]."');
		// 		</script>";
		$big = "Successfully logged in!";
		$mid = "Welcome back, ".$row[2];
		$sml = "Taking you to your profile...";
		$fce = "<style> .between-frown { display: none !important; } </style>";
		$smile = true;
	}
	require_once("intermediary.php");
	displayIntermediaryLocal($smile,$big,$mid,$sml);

