<?php
header( "refresh:3; url=../index.php" ); 
include_once("connect.php");
$accid = $_POST["accid"];
$origin = $_POST["origin"];
$sql = "UPDATE tblaccount 
        SET isdeleted = TRUE
        WHERE accid = $accid;";
if(mysqli_query($connection,$sql)){
    $smile = false;
    $big = "Goodbye!";
    $mid = "Your account has now been deactivated.";
    $sml = "Returning to Landing Page...";
    header( "refresh:3; url=../index.php" ); 
} else {
    $smile = false;
    $big = "Error!";
    $mid = "There has been a problem in deactivating your account.";
    $sml = "Returning to Previous Page...";
    header( "refresh:3; url=../$origin.php" ); 
}
require_once("intermediary.php");
displayIntermediaryLocal($smile,$big,$mid,$sml);
