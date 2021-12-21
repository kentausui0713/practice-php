<!-- 入力してもらった数字に1を足す -->
<?php
  $a=$_POST["input_num"];
  function tasuichi(){
    global $a;
    if($a>=0){
      print($a+1);
    } 
  }
  tasuichi();
?>
<form action="" method="post">
  <input type="number" name="input_num">
  <input type="submit" value="決定">
</form>