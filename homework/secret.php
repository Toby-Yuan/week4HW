<?php

session_start();

if(!isset($_SESSION["uid"])){
  header("location: login.php?tologin=1");
  exit();
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Lag - Member Page</title>
<link rel="stylesheet" href="./CSS/style.css">
</head>
<body>

<table>
  <tr>
    <td>會員系統 － 會員專用</td>
  </tr>
  <tr>
    <td>This page for member only.</td>
  </tr>
  <tr>
    <td>
      <a href="index.php">回首頁</a>
      |
      <a href="login.php?signout=1">登出</a>
      |
      <a href="change.php">更改資料</a>
    </td>
  </tr>
</table>


</body>
</html>