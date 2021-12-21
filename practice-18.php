<!-- ※valueで配列番号取得 -->
<?php
  $horse_name=array(ルージュバック,ココロノアイ,クイーンズリング,キャットコイン,レッツゴードンキ);
  $horse=$horse_name[$_POST['prediction']];
  echo "あなたは2015年の優勝馬を".$horse."と予想しました";
?>