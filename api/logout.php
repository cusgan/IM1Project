<?php
header( "refresh:1; url=../index.php" ); 
session_start();
$variables_list = "invalidlogin accid userid username email fname lname address birthday businessid bname bdesc baddr";
$variables = explode(" ",$variables_list);
foreach($variables as $var)
    if(isset($_SESSION["$var"])) unset($_SESSION["$var"]);
include_once("connect.php");
$smile = true;
$big = "Logged out!";
$mid = "Thanks for using KaOnTime!";
$sml = "Returning to Landing Page...";
require_once("intermediary.php");
displayIntermediaryLocal($smile,$big,$mid,$sml);
