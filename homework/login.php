<?php

session_start();

if(isset($_GET["signout"])){
  // setcookie("uid", "GUEST", time() - 60 * 60 * 24 * 7);
  unset($_SESSION["uid"]);
  session_unset();
  session_destroy();
  header("location: index.php");
  exit();
}

if(isset($_POST["btnOK"])){
  $userName = $_POST["txtUserName"];
  if($userName != ""){
    // setcookie("uid", $userName);
    $_SESSION["uid"] = $userName;
    header("location: index.php");
    exit();
  }
}

if(isset($_POST["btnHome"])){
  header("location: index.php");
  exit();
}

if(isset($_POST["btnLogin"])){
  $userName = $_POST["txtUserName"];
  if($userName != ""){
    // setcookie("uid", $userName);
    $_SESSION["uid"] = $userName;
    header("location: secret.php");
    exit();
  }
}

?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Lab - Login</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="login.php">
  <table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
    <tr>
      <td colspan="2" align="center" bgcolor="#CCCCCC"><font color="#FFFFFF">會員系統 - 登入</font></td>
    </tr>
    <tr>
      <td width="80" align="center" valign="baseline">帳號</td>
      <td valign="baseline"><input type="text" name="txtUserName" id="txtUserName" /></td>
    </tr>
    <tr>
      <td width="80" align="center" valign="baseline">密碼</td>
      <td valign="baseline"><input type="password" name="txtPassword" id="txtPassword" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#CCCCCC">
      
      <?php if(!isset($_GET["tologin"])) { ?>
        <input type="submit" name="btnOK" id="btnOK" value="登入" />
      <?php } else {?>
        <input type="submit" name="btnLogin" id="btnLogin" value="登入" />
      <?php } ?>
      
      <input type="reset" name="btnReset" id="btnReset" value="重設" />
      <input type="submit" name="btnHome" id="btnHome" value="回首頁" />
      </td>
    </tr>
  </table>
</form>
</body>
</html>