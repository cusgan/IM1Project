<?php
header( "refresh:1; url=../search.php" ); 

include_once("connect.php");
// $filename = $_FILES["itemimg"]["name"];
// $tempname = $_FILES["itemimg"]["tempname"];
$sql = "INSERT INTO tblcartitem (userid, itemid, cartqty) 
        VALUES ('".$_POST["userid"]."','".$_POST["itemid"]."','".$_POST["cartqty"]."')";
if ($connection->query($sql) === TRUE) {
    // $itemid = $connection->insert_id;
    // if(move_uploaded_file($tempname, "../itemimgs/".$filename)){
    //     echo "image uploaded good";
    // }
    echo "item added to cart";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}
echo "reloading page....";