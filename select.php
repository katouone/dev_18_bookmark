<?php

require_once('funcs.php');

//1.  DB接続します
try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=php02_kadai;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('DBConnectError'.$e->getMessage());
}

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT* FROM php02_needs_table");
$status = $stmt->execute();

//３．データ表示
// $view="";
$view2=[];
if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    // $view .= '<p>'.h($result['bookname']).'/'.h($result['bookurl']).'/'.h($result['comment']).'</p>';
    $view2[] = $result;
    // var_dump($result);
    // echo '<br>';
    // echo $view2;
  }
// var_dump($view2);
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>表示</title>
<!-- <link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet"> -->
<style>
div { 
  padding: 10px;
  font-size: 16px;
}

table{
  text-align: center;
  border-collapse:  collapse;
  margin: auto;
}

th,td{
  border: solid 1px black;
  padding: 10px;
}

table th {
  color: #FF9800;
  background: #fff5e5;
}

.table_content{
  max-width: 500px;
}

</style>

</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <h2 class="title">データ一覧</h2>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->

<table>
  <!-- 表の１行目（列のタイトル） -->
  <tr>
    <th>ID</th>
    <th>投稿者</th>
    <th>国・地域名</th>
    <th>場面</th>
    <th>情報のタイプ</th>
    <th>内容</th>
    <th>参考URL</th>
    <th>投稿日時</th>
  </tr>

  <!-- 表の2行目以降 -->
  <?php 
      for( $j =0; $j< count($view2); $j++){
  ?>
    <tr>
      <td><?php echo h($view2[$j]['id']); ?></td>
      <td><?php echo h($view2[$j]['name']); ?></td>
      <td><?php echo h($view2[$j]['country']); ?></td>
      <td><?php echo h($view2[$j]['scene']); ?></td>
      <td><?php echo h($view2[$j]['type']); ?></td>
      <td class="table_content"><?php echo h($view2[$j]['content']); ?></td>
      <td><?php echo '<a href='.h($view2[$j]['url']).' target="_blank">Link</a>'; ?></td>
      <td><?php echo h($view2[$j]['indate']); ?></td>
    </tr>
  <?php
  }
  ?>
</table>

<div><a href="index.php">データ登録へ</a></div>

<!-- Main[End] -->
</body>
</html>
