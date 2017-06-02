<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
if( !isset($_POST['id'],$_POST['name']) ||
  // strlenで文字列の長さを取得してる
  strlen($_POST['id']) == 0 ||
  strlen($_POST['name']) == 0) {
    echo 'Missing Data';
} else {
  print($_POST['id'].'の'.$_POST['name'].'さん、こんにちは');
}
?>


  </body>
</html>
