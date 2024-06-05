<?php
header( "refresh:2; url=../admin.php" ); 
include_once("connect.php");
$queryType = $_POST["adminQueryType"];
$sql = "";
if($queryType == "updateUser"){
    $userid = $_POST["adminUserID"];
    $fname = $_POST["adminUserFname"];
    $lname = $_POST["adminUserLname"];
    $addr = $_POST["adminUserAddress"];
    $bday = $_POST["adminUserBirthday"];
    $phone = $_POST["adminUserPhone"];
    $sql = "UPDATE tbluser 
        SET firstname = '$fname', lastname = '$lname', address = '$addr', birthdate = $bday, phonenumber = '$phone'
        WHERE userid = $userid;";
} else if($queryType == "deleteUser"){
    $userid = $_POST["adminUserID"];
    $sql = "UPDATE tbluser 
        SET isdeleted = 1
        WHERE userid = $userid;";
} else if($queryType == "restoreUser"){
    $userid = $_POST["adminUserID"];
    $sql = "UPDATE tbluser 
        SET isdeleted = 0
        WHERE userid = $userid;";
}
if(mysqli_query($connection,$sql)){
    $smile = true;
    $big = "Success!";
    $mid = "The query was successful.";
} else {
    $smile = false;
    $big = "Error!";
    $mid = mysqli_error($connection);
}
$sml = "Returning to Administrator Page...";
require_once("intermediary.php");
displayIntermediaryLocal($smile,$big,$mid,$sml);

