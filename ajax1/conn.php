<?php
	$link=mysqli_connect("localhost","root","") or die("数据库链接失败");
	mysqli_select_db($link,"jj") or die("数据库选择失败");
	mysqli_set_charset($link,"GBK");

?>