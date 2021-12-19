<!-- while文を使って表示 -->

<!doctype html>
<html>
  <?php
    $horse = array("ディープインパクト","トウカイテイオー","スペシャルウィーク","スーパークリーク","メジロマックイーン","ダイユウサク","オグリキャップ","ウォッカ","ダイワスカーレット");
  ?>
  <p>出走馬は<?php print(count($horse));?>頭です。</p></br>
  <ul>
    <?php
      $i=0;
      while($i<count($horse)){
        print("<li>".$horse[$i]."</li>");
        $i++;
      }
    ?>
  </ul>
</html>