<?php
header( "refresh:1; url=../business.php" ); 
include_once("connect.php");
$sql = "DELETE FROM tblmenuitem WHERE itemid='".$itemid."'";
$res = mysqli_query($connection,$sql);
//NOT WORKING NI
