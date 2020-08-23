<?php

session_start();
$userId = $_SESSION["uid"];

require_once("connect.php");
$find = <<<findSql
SELECT * FROM member WHERE userName = '$userId';
findSql;
$result = mysqli_query($link, $find);
$row = mysqli_fetch_assoc($result);

?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Lab - Change</title>
  <link rel="stylesheet" href="./CSS/styleLogin.css">
</head>
<body>
<form id="form1" name="form1" method="post" action="login.php">
  <table>
    <tr>
      <td colspan="2">會員系統 - 更改資料</td>
    </tr>
    <tr>
      <td width="80" align="center" valign="baseline">帳號</td>
      <td valign="baseline"><input type="text" name="txtUserName" id="txtUserName" value="<?= $row["userName"] ?>" placeholder="請輸入8~15位的英文或數字" pattern="\w{8,15}" required /></td>
    </tr>
    <tr>
      <td width="80" align="center" valign="baseline">密碼</td>
      <td valign="baseline"><input type="password" name="txtPassword" id="txtPassword" value="<?= $row["userPassword"] ?>" placeholder="請輸入8~15位的英文或數字" pattern="\w{8,15}" required /></td>
    </tr>
    <tr>
      <td colspan="2">
      
      <input type="submit" name="btnOK" id="btnOK" value="確定" />
      
      <input type="reset" name="btnReset" id="btnReset" value="重設" />
      <input type="submit" name="btnHome" id="btnHome" value="取消更改" />
      </td>
    </tr>
  </table>
</form>
</body>
</html>