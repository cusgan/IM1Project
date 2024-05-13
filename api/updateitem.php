<?php
header( "refresh:1; url=../business.php" ); 
include_once("connect.php");
$id = $_POST["itemid"];
$menuid = $_POST["menuid"];
$name = $_POST["editItemName"];
$desc = $_POST["editDescription"];
$stock = $_POST["editStock"];
$price = $_POST["editPrice"];

$sql = "UPDATE tblmenuitem 
        SET itemname = '$name', itemdesc = '$desc', qty = $stock, buyprice = $price
        WHERE itemid = $id;";
if(mysqli_query($connection,$sql)){
        $smile = true;
        $big = "Success!";
        $mid = "The Item has been successfully updated in your menu.";
} else {
        $smile = false;
        $big = "Error!";
        $mid = "There has been a problem in updating your item.";
}
$sml = "Returning to Business Menu view...";
require_once("intermediary.php");
displayIntermediaryLocal($smile,$big,$mid,$sml);
