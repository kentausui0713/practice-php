<!-- 9876円の商品の税込価格　小数点繰り上げ -->
<?php
  $item = 9876;
  $item_tax_in = floor(9876 * 1.08);
  echo "商品の価格: ".$item."円</br>";
  print('税込価格: '.$item_tax_in."円");
?>