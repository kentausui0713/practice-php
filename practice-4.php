<!--1~50の奇数を縦に表示-->
<?php
  for($i=1; $i<=50; $i++){
    if($i%2 == 0)
    continue;
    echo "$i<br>";
  }
?>