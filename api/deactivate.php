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
    $sml = "Thank you for using KaOnTime!";
    header( "refresh:3; url=../index.php" ); 
} else {
    $smile = false;
    $big = "Error!";
    $mid = "There has been a problem in deactivating your account.";
    $sml = "Returning to Previous Page...";
    header( "refresh:3; url=../$origin.php" ); 
}
$variables_list = "invalidlogin accid userid username email fname lname address birthday businessid bname bdesc baddr";
$variables = explode(" ",$variables_list);
foreach($variables as $var)
    if(isset($_SESSION["$var"])) unset($_SESSION["$var"]);
require_once("intermediary.php");
displayIntermediaryLocal($smile,$big,$mid,$sml);
