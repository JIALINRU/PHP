<?php
	include "conn.php";
	if(isset($_GET['id'])){
		$d1=time();
		$id=$_GET['id'];
		$d=date('d');
		$pass=$d.'www.laoshan.com';
		$pass1=base64_encode($pass);
		$sql="update user set pass='$pass1' where userid='$id'";
		$query=mysqli_query($link,$sql);
		if($query){
			// $d1=time();
			// if($d2==$d1 + 20)

			header('location:login.php');
		}else{
			echo "修改失败";
		}
	}
?>

<a href="zz.php?id=1">找回密码</a>
<!-- <form action="zz.php" method="post">
	修改密码:<input type="text" >
</form> -->