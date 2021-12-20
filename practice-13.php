<!-- 1~10の縦横テーブル、掛け算表 -->
<!doctype html>
<html>
<?php
  $width = array(1,2,3,4,5,6,7,8,9,10);
  $hight = array(1,2,3,4,5,6,7,8,9,10);
?>
  <table border="1">
    <?php
     for($h=0;$h<count($hight);$h++){
      echo "<tr>";
        for($w=0;$w<count($width);$w++){
          print('<td>'.$hight[$h]*$width[$w].'</td>');
        }
      echo "</tr>";
     }
    ?>
  </table>
</html>

<!-- 模範解答(簡潔に書くには) -->
<!-- <table border="1">
  <?php
  for($i=1;$i<=10;$i++){
    echo '<tr>';
      for($a=1;$a<=10;$a++){
        echo '<td>'.$i*$a.'</td>';
      }
    echo '</tr>';
  }
  ?>
</table> -->