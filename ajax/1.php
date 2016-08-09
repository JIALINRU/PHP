<?php
	include "conn.php";
	if($_GET['id']==123){
		echo '用户名已存在';
	}
?>

<form action="2.php" method="post">
	用户名:<input type="text" name="username"><br/>
	密码:<input type="password" name="pass"><br/>
	<input type="submit" name="sub" value="注册">
</form>