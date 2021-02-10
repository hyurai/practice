<?php
    var_dump($_GET['name1']); 
    //var_dumpは型と格納されている配列の中身を表示される
?>
<!DOCTYPE html>
<head>
<title>
    フォームからデータを受け取る
</title>
</head>
<body>
  <a href="/path/to/send/?month=2月&day=10日"></a>
  //name1とname2とurlに入るそしてスーパグローバル変数に格納されます
  <form action="/path/to/send/" method="get">
    <input type="text" name="month" value="2月">
    <input type="text" name="day" value="１０日">
    <input type="submit" value="Submit">
 </form>
</body>