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
