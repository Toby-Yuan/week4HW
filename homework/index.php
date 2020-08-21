<?php

session_start();

$userName = "GUEST";
if(isset($_SESSION["uid"])){
  $userName = $_SESSION["uid"];
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Lab - index</title>
<link rel="stylesheet" href="./CSS/style.css">
</head>
<body>

<table>
  <tr>
    <td>會員系統 - 首頁</td>
  </tr>
  <tr>
    <td valign="baseline">

      <?php if($userName == "GUEST") { ?>
        <a href="login.php">登入</a> 
      <?php } else { ?>
        <a href="login.php?signout=1">登出</a>
      <?php } ?>
      | 
      <a href="secret.php">會員專用頁</a>
    </td>
  </tr>
  <tr>
    <td>Welcome <?= $userName ?></td>
  </tr>
</table>


</body>
</html>