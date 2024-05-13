<?php
header( "refresh:1; url=../search.php" ); 
include_once("connect.php");
require_once("intermediary.php");
$cartitemid = $_POST["cartitemid"];
$itemname = $_POST["itemname"];
$sql = "DELETE FROM tblcartitem WHERE cartitemid='".$cartitemid."'";
if(mysqli_query($connection,$sql)){
    //echo "deleting ".$itemname. " ".$cartitemid;
    $smile = true;
    $big = "Success!";
    $mid = "$itemname was successfully removed from your cart.";
    $sml = "Returning to previous page...";
    displayIntermediaryLocal($smile,$big,$mid,$sml);
} else{
    $smile = false;
    $big = "Error!";
    $mid = "There was a problem in removing the item from the cart.";
    $sml = "Returning to previous page...";
    displayIntermediaryLocal($smile,$big,$mid,$sml);
}
