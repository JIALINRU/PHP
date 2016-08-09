<?php
	include "conn.php";
	if(isset($_GET['username'])){
		$name=$_GET['username'];
		//$pass=$_POST['pass'];
		$sql="select * from user where name='$name'";
		$query=mysqli_query($link,$sql);
		$result=mysqli_fetch_array($query);
		if($result){
			echo 'error';
			//die();
			//echo "<script>location='1.php?id=error'</script>";
		}else{
			echo "lalalala";
		}
	}
?>