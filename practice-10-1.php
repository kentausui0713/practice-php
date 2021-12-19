<!doctype html>
<html>
  <?php
  $horse = array("ディープインパクト","トウカイテイオー","スペシャルウィーク","スーパークリーク","メジロマックイーン","ダイユウサク","オグリキャップ","ウォッカ","ダイワスカーレット");
  $horse_num = count($horse);
  ?>
  出走馬は<?php echo $horse_num?>頭です。</br>

  
  <?php
  echo "<ul>";
  foreach($horse as $value){
    echo ("<li>".$value."</li>");
  }
  echo "</ul>";
  ?>
</html>
