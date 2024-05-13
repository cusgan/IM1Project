<?php
function displayIntermediary($success, $big, $mid, $sml){
    $res = file_get_contents("includes/intermediary.php");
    $res = str_replace("[BIG]",$big,$res);
    $res = str_replace("[MID]",$mid,$res);
    $res = str_replace("[SML]",$sml,$res);
    if(!$success)
        $res = str_replace(".between-frown",".between-smile",$res);
    echo $res;
}
function displayIntermediaryLocal($success, $big, $mid, $sml){
    $res = file_get_contents("../includes/intermediary.php");
    $res = str_replace("[BIG]",$big,$res);
    $res = str_replace("[MID]",$mid,$res);
    $res = str_replace("[SML]",$sml,$res);
    if(!$success)
        $res = str_replace(".between-frown",".between-smile",$res);
    echo $res;
}