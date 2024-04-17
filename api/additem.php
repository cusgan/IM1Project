<?php
header( "refresh:10; url=../business.php" ); 

include_once("connect.php");
$sql = "INSERT INTO tblmenuitem (menuid, itemname, itemdesc, qty, buyprice) VALUES ('".$_POST["menuid"]."', '".$_POST["inptItemName"]."', '".$_POST["inptDescription"]."', '".$_POST["inptStock"]."', '".$_POST["inptPrice"]."')";
if ($connection->query($sql) === TRUE) {
    $itemid = $connection->insert_id;
    } else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}
echo "inserting item....";