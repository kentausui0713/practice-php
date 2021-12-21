<!-- 現在のファイルまでのパス -->
<?php
echo "ファイルまでのパス: ".__FILE__."</br>";
?>

<!-- 現在のディレクトリまでのパス -->
<?php
__DIR__
?>

<!-- 現在のディレクトリ内のファイル名一覧 -->
<!-- DirectoryIterator()はファイルシステムのディレクトリを閲覧するためのインターフェイス。
　　　一般的にはクラスとして使用されるらしい。 -->
<?php
$dir = new DirectoryIterator(__DIR__);
echo "○現在のディレクトリ内のファイル一覧</br>";
foreach($dir as $file){
  if($file->isFile()){
    echo $file->getFileName()."</br>";
  }
}
?>