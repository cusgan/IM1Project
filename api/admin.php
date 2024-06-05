<?php
function editUserModal($userid, $fname, $lname, $address, $bday, $isdel, $phone){
    $res = file_get_contents("includes/adminedituser.php");
    $res = str_replace("[USERID]",$userid,$res);
    $res = str_replace("[FIRST NAME]",$fname,$res);
    $res = str_replace("[LAST NAME]",$lname,$res);
    $res = str_replace("[ADDRESS]",$address,$res);
    $res = str_replace("[BIRTHDAY]",$bday,$res);
    $res = str_replace("[IS DELETED]",$isdel,$res);
    $res = str_replace("[PHONE]",$phone,$res);
    echo $res;
}