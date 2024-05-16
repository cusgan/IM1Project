<?php
function displayItem($itemid, $menuid, $name, $desc, $qty, $price){
    $price = number_format($price,2);
    $res = file_get_contents("includes/menuitem.php");
    $res = str_replace("[ITEMID]",$itemid,$res);
    $res = str_replace("[MENUID]",$menuid,$res);
    $res = str_replace("[ITEM NAME]",$name,$res);
    $res = str_replace("[ITEM DESCRIPTION]",$desc,$res);
    $res = str_replace("[ITEM STOCK]",$qty,$res);
    $res = str_replace("[ITEM PRICE]",$price,$res);
    echo $res;
}
function displayCartItem($cartitemid,$itemid, $menuid, $name, $desc, $qty, $price){
    $price = number_format($price,2);
    $res = file_get_contents("includes/cartitem2.php");
    $res = str_replace("[CARTITEMID]",$cartitemid,$res);
    $res = str_replace("[ITEMID]",$itemid,$res);
    $res = str_replace("[MENUID]",$menuid,$res);
    $res = str_replace("[ITEM NAME]",$name,$res);
    $res = str_replace("[ITEM DESCRIPTION]",$desc,$res);
    $res = str_replace("[ITEM STOCK]",$qty,$res);
    $res = str_replace("[ITEM PRICE]",$price,$res);
    echo $res;
}
function displaySearchItem($itemid, $userid, $name, $desc, $qty, $price){
    $price = number_format($price,2);
    $res = file_get_contents("includes/searchitem.php");
    $res = str_replace("[ITEMID]",$itemid,$res);
    $res = str_replace("[USERID]",$userid,$res);
    $res = str_replace("[ITEM NAME]",$name,$res);
    $res = str_replace("[ITEM DESCRIPTION]",$desc,$res);
    $res = str_replace("[ITEM STOCK]",$qty,$res);
    $res = str_replace("[ITEM PRICE]",$price,$res);
    echo $res;
}
