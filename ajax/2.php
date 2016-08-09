<?php
	include "conn.php";
	if(isset($_POST['sub'])){
		$name=$_POST['username'];
		$pass=$_POST['pass'];
		$sql="select * from user where name='$name'";
		$query=mysqli_query($link,$sql);
		$result=mysqli_fetch_array($query);
		if($result){
			echo "<script>location='1.php?id=123'</script>"
		}
	}


?>