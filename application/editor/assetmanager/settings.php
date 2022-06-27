<?php
$path = substr($_SERVER['REQUEST_URI'], 0, strrpos($_SERVER['REQUEST_URI'], '/') + 1);

  $path = str_replace("uploads", '', $path); //example result: /tmp
//echo "<br>".$path;
$bReturnAbsolute=true;

$sBaseVirtual0="/uploads";  //Assuming that the path is http://yourserver/Editor/assets/ ("Relative to Root" Path is required)

  $sBase0=$_SERVER['DOCUMENT_ROOT'] . $sBaseVirtual0; //The real path
//$sBase0="/home/yourserver/web/Editor/assets"; //example for Unix server

$sName0="Assets";

$sBaseVirtual1="";
$sBase1="";
$sName1="";

$sBaseVirtual2="";
$sBase2="";
$sName2="";

$sBaseVirtual3="";
$sBase3="";
$sName3="";
?>
