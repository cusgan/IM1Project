<?php
header( "refresh:1; url=../business.php" ); 

include_once("connect.php");
$filename = $_FILES["itemimg"]["name"];
$tempname = $_FILES["itemimg"]["tempname"];
$sql = "INSERT INTO tblmenuitem (menuid, itemname, itemdesc, qty, buyprice, imgurl) 
        VALUES ('".$_POST["menuid"]."', '".$_POST["inptItemName"]."', '".$_POST["inptDescription"]."', '".$_POST["inptStock"]."', '".$_POST["inptPrice"]."','".$filename."')";
if(mysqli_query($connection,$sql)){
    $smile = true;
    $big = "Success!";
    $mid = "Added item to menu successfully.";
} else {
    $smile = false;
    $big = "Error!";
    $mid = "There has been a problem in adding the new item.";
}
$sml = "Returning to Business Menu view...";
require_once("intermediary.php");
displayIntermediaryLocal($smile,$big,$mid,$sml);