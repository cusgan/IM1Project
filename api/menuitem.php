<?php
function displayItem($itemid, $menuid, $name, $desc, $qty, $price){
    $res = file_get_contents("../includes/menuitem.php");
    $res = str_replace("ITEMID",$itemid,$res);
    $res = str_replace("MENUID",$menuid,$res);
    $res = str_replace("ITEMNAME",$itemid,$res);
    $res = str_replace("ITEMID",$itemid,$res);
}
