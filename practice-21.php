<?php
$month="6月";
$keiba1="有馬";
$keiba2="宝塚";
$keiba3="セントライト";

if($number="12月"){
  $race="keiba1";
}elseif($number="6月"){
  $race="keiba2";
}elseif($number="9月"){
  $race="keiba3";
}

print($month."は".$$race."記念です。");

?>