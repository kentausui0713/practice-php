<!-- for文を使って表示 -->

<!doctype html>
<html>
  <?php
  $horse = array("ディープインパクト","トウカイテイオー","スペシャルウィーク","スーパークリーク","メジロマックイーン","ダイユウサク","オグリキャップ","ウォッカ","ダイワスカーレット");
  $horse_num = count($horse);
  ?>
  出走馬は<?php echo $horse_num?>頭です。</br>

  <?php
  echo "<ul>";
  for($i=0;$i<$horse_num;$i++){
    print("<li>".$horse[$i]."</li>");
  }
  echo "</ul>";
  ?>
</html>