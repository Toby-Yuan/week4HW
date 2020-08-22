<?php

$link = @mysqli_connect('localhost', 'root', 'root');
mysqli_query($link, 'set names utf8');
mysqli_select_db($link, 'login');

// 檢驗連線
// $selectAll = 'SELECT * FROM member';
// $result = mysqli_query($link, $selectAll);
// $row = mysqli_fetch_assoc($result);

// echo $row['id'];
// echo $row['userName'];
// echo $row['password'];

?>