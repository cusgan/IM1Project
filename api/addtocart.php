<?php
header( "refresh:1; url=../search.php" ); 

include_once("connect.php");
require_once("intermediary.php");
// $filename = $_FILES["itemimg"]["name"];
// $tempname = $_FILES["itemimg"]["tempname"];
$sql = "INSERT INTO tblcartitem (userid, itemid, cartqty) 
        VALUES ('".$_POST["userid"]."','".$_POST["itemid"]."','".$_POST["cartqty"]."')";
if ($connection->query($sql) === TRUE) {
    // $itemid = $connection->insert_id;
    // if(move_uploaded_file($tempname, "../itemimgs/".$filename)){
    //     echo "image uploaded good";
    // }
    $big = "Success!";
    $mid = "The item has been added to your cart.";
    $sml = "Returning to previous page...";
    $smile = true;
    //echo "item added to cart";
} else {
    //echo "Error: " . $sql . "<br>" . $connection->error;
    
    $big = "Error!";
    $mid = "There has been an error regarding the transaction.";
    $sml = "Returning to previous page...";
    $smile = false;
}
displayIntermediaryLocal($smile,$big,$mid,$sml);

//echo "reloading page....";