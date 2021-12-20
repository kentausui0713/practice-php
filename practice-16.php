<!-- DateTime("w")で曜日番号取得、$week_janで番号に適した曜日を配置。 -->
<?php
  $date = $_POST['date'];
  $date = new DateTime($date);
  $week_jan = array("日","月","火","水","木","金","土");
  print $date->format('Y/m/d')."は".$week_jan[$date->format("w")]."曜日です";
?>