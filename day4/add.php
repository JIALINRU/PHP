<?php
	include "conn.php";
	if(isset($_POST['sub'])){
		$title=$_POST['title'];
		$con=$_POST['con'];
		//拼一个字符串mysql插入的语法
		$sql="insert into blog(blogid,title,content,time) values(null,'$title','$con',now())";

		//字符串发送数据库
		$query=mysqli_query($link,$sql);
		if($query){
			echo "<script>alert('插入数据成功')</script>";
			echo "<script>location='index.php'</script>";
		}else{
			echo "插入失败";
		}
	}
?>


<meta charset="utf-8">
<form action="add.php" method="post">
	标题:<input type="text" name="title"><br/>
	内容:<textarea rows=10 cols=30 name="con"></textarea><br/>
	<input type="submit" name="sub" value="发表">
</form>