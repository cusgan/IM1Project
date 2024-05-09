<?php
function displayItem($itemid, $menuid, $name, $desc, $qty, $price){
    $res = file_get_contents("includes/menuitem.php");
    $res = str_replace("[ITEMID]",$itemid,$res);
    $res = str_replace("[MENUID]",$menuid,$res);
    $res = str_replace("[ITEM NAME]",$name,$res);
    $res = str_replace("[ITEM DESCRIPTION]",$desc,$res);
    $res = str_replace("[ITEM STOCK]",$qty,$res);
    $res = str_replace("[ITEM PRICE]",$price,$res);
    echo $res;
}
function displayCartItem($itemid, $menuid, $name, $desc, $qty, $price){
    $res = file_get_contents("includes/cartitem.php");
    $res = str_replace("[ITEMID]",$itemid,$res);
    $res = str_replace("[MENUID]",$menuid,$res);
    $res = str_replace("[ITEM NAME]",$name,$res);
    $res = str_replace("[ITEM DESCRIPTION]",$desc,$res);
    $res = str_replace("[ITEM STOCK]",$qty,$res);
    $res = str_replace("[ITEM PRICE]",$price,$res);
    echo $res;
}
function displaySearchItem($itemid, $userid, $name, $desc, $qty, $price){
    $res = file_get_contents("includes/searchitem.php");
    $res = str_replace("[ITEMID]",$itemid,$res);
    $res = str_replace("[USERID]",$userid,$res);
    $res = str_replace("[ITEM NAME]",$name,$res);
    $res = str_replace("[ITEM DESCRIPTION]",$desc,$res);
    $res = str_replace("[ITEM STOCK]",$qty,$res);
    $res = str_replace("[ITEM PRICE]",$price,$res);
    echo $res;
}
