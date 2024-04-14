<?php
  //セッションを開始
  session_start();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>登録完了</title>
</head>
<body>
  <h2>登録が完了しました。</h2>
  <p>社員情報がデータベースに保存されました。</p>
  <button onclick="location.href='form.php';">戻る</button>
  <?php
  //セッション初期化 
  $_SESSION = array();
  //セッション終了
  session_destroy();
  ?>
</body>
</html>