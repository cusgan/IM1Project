<?php
header( "refresh:10; url=../business.php" ); 
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
$res = mysqli_query($connection,$sql);
echo "updating ".$name;