<?php
header( "refresh:1; url=../business.php" ); 

include_once("connect.php");
$filename = $_FILES["itemimg"]["name"];
$tempname = $_FILES["itemimg"]["tempname"];
$sql = "INSERT INTO tblmenuitem (menuid, itemname, itemdesc, qty, buyprice, imgurl) 
        VALUES ('".$_POST["menuid"]."', '".$_POST["inptItemName"]."', '".$_POST["inptDescription"]."', '".$_POST["inptStock"]."', '".$_POST["inptPrice"]."','".$filename."')";
if ($connection->query($sql) === TRUE) {
    $itemid = $connection->insert_id;
    if(move_uploaded_file($tempname, "../itemimgs/".$filename)){
        echo "image uploaded good";
    }
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}
echo "inserting item....";