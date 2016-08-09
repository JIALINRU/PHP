<?php
	include "conn.php";
	for ($i=0; $i <3 ; $i++) { 
		$sql="insert into blog(blogid,title,content,time) values(null,'laoshan','laoshan',now())";
		mysqli_query($link,$sql);
	}
?>