<?php
header( "refresh:1; url=../business.php" ); 
include_once("connect.php");
$itemid = $_POST["itemid"];
$itemname = $_POST["itemname"];
$sql = "DELETE FROM tblmenuitem WHERE itemid='".$itemid."'";
$res = mysqli_query($connection,$sql);
echo "deleting ".$itemname;
//NOT WORKING NI
