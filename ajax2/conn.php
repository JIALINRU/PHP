<?php
	$link=@mysqli_connect('localhost','root','') or die('xxx');
	@mysqli_select_db($link,'blogll') or die('yyy');
	mysqli_set_charset($link,'utf8');

?>