<?php
header( "refresh:1; url=../search.php" ); 
include_once("connect.php");
$cartitemid = $_POST["cartitemid"];
$itemname = $_POST["itemname"];
$sql = "DELETE FROM tblcartitem WHERE cartitemid='".$cartitemid."'";
$res = mysqli_query($connection,$sql);
echo "deleting ".$itemname;
//NOT WORKING NI
