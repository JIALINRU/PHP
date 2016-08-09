<?php
	include "conn.php";
	if (isset($_GET['id'])) {
		$id=$_GET['id'];

		//拼删除字符串
		$sql="delete from blog where blogid='$id'";
		$query=mysqli_query($link,$sql);
		if($query){
			echo "<script>location='index.php'</script>";

		}else{
			echo "删除失败";
		}
	}
?>