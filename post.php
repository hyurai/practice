<?php 
  var_dump($_POST);
  //getとpostの違いはurlに表示されるかどうか。クレジットカードの内容などはpostにする
?>

<!DOCTYPE html>
<head>
<title>
    フォームからデータを受け取る
</title>
</head>
<body>
  <a href="/path/to/send/to"></a>
  //word1とword2とurlに入るそしてスーパグローバル変数に格納されます
  <form action="/path/to/send/" method="post">
    <input type="text" name="month" value="2月">
    <input type="text" name="day" value="10日">
    <input type="submit" value="Submit">
 </form>
</body>
