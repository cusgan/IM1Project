<?php
header( "refresh:2; url=../admin.php" ); 
include_once("connect.php");
$itemid = $_POST["itemid"];
if(mysqli_query($connection,$sql)){
    $smile = true;
    $big = "Success!";
    $mid = "The item has been successfully removed from your menu.";
} else {
    $smile = false;
    $big = "Error!";
    $mid = "There has been a problem in deleting your item.";
}
$sml = "Returning to Business Menu view...";
require_once("intermediary.php");
displayIntermediaryLocal($smile,$big,$mid,$sml);
