<?php
	include "conn.php";
	if (isset($_GET['id'])) {
		$id=$_GET['id'];
		$sql="select * from blog where blogid='$id'";
		$query=mysqli_query($link,$sql);
		$rs=mysqli_fetch_array($query);
	}

	if(isset($_POST['sub'])){
		$title=$_POST['title'];
		$con=$_POST['con'];
		$hid=$_POST['hid'];
		$sql="update blog set title='$title',content='$con' where blogid='$hid'";
		$query=mysqli_query($link,$sql);
		if($query){
			header("location:index.php");
		}else{
			echo "更新失败";
		}

	}
?>

<meta charset="utf-8">
<form action="edit.php" method="post">
<input type="hidden" name="hid" value=<?php echo $rs['blogid']; ?>>
	标题:<input type="text" name="title" value=<?php echo $rs['title']; ?>><br/>
	内容:<textarea rows=10 cols=30 name="con"><?php echo $rs['content']; ?></textarea><br/>
	<input type="submit" name="sub" value="更新">
</form>