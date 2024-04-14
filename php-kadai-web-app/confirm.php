<?php
  //postリクエストから入力データを取得
  $employee_name = $_POST['employee_name'];
  $employee_age = $_POST['employee_age'];
  $department = $_POST['department'];

  //エラーを格納する配列
  $errors = [];

  //名前のバリデーション
  if(empty($employee_name)){
    $errors[] = '名前を入力して下さい';
  }

  if(empty($employee_age)){
    $errors[] = '正しく入力してください';
  }
// 数字以外が入力された時のバリデーション
// 　if(preg_match('/[a-zA-Z]/',$employee_age)){
//     $errors[] = '正しく入力してください2';
//   }

//入力項目に問題がなければセッションクッキーを保存
if(empty($errors)){
  //セッション変数を保存
  $_SESSION['employee_name']=$employee_name;
  $_SESSION['employee_age']=$employee_age;
  //クッキーを登録（1時間）
  setcookie('employee_name',$employee_name, time()+3600);
  setcookie('employee_age',$employee_age, time()+3600);
}


?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>入力内容確認ページ</title>
</head>
<body>
  <h2>入力内容をご確認ください</h2>
  <p>問題がなければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>
  <table border="1">
    <tr>
      <th>項目</th>
      <th>入力内容</th>
    </tr>
    <tr>
      <td>社員名</td>
      <td><?php echo $employee_name;?></td>
    </tr>
    <tr>
      <td>年齢</td>
      <td><?php echo $employee_age;?></td>
    </tr>
    <tr>
      <td>所属部署</td>
      <td><?php echo $department;?></td>
    </tr>
  
  
  </table>
  <p>
    <button id="confirm-btn"onclick="location.href='complete.php';">確定</button>
    <button id=""onclick="history.back();">キャンセル</button>
  </p>
  <?php 
    if(!empty($errors)){
      foreach($errors as $error){
        echo '<font color="red">'. $error . '</font>'.'<br>';
      }
      //確定ボタンを無効化するJSコードをブラウザに送信
      echo '<script>document.getElementById("confirm-btn").disabled=true;</script>';
    }

    ?>
</body>
</html>

