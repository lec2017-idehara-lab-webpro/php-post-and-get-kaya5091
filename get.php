<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>受信側</title>
  </head>

  <body>
  <?php
  	if( !isset($_POST['name'],$_POST['nr'],$_POST['mf'],$_POST['pw']) ||
      // strlenで文字列の長さを取得してる
  		strlen($_POST['name']) == 0 ||
  		strlen($_POST['nr']) == 0 ||
  		strlen($_POST['mf']) == 0 ||
  		strlen($_POST['pw']) == 0) {
    		echo 'Missing Data';
  	} else {
        // 配列をループで処理する
    		foreach($_POST as $k => $v) {
    			echo "$k is $v.";
    			echo "<br>";
    		}
  	}
  ?>
  </body>

</html>
