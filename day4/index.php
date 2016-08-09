<form action="index.php" method="get">
	<input type="text" name="search" >
	<input type="submit" name="sub" value="搜索">

</form>

<a href="add.php">添加文章</a>
<?php
	if($_COOKIE['id']){
		echo " <a href='admin/admin.php'>"."<span>".$_COOKIE['name'].' 已登录'."</span>"."</a>";
		echo "<a href='logout.php'>".' 退出'."</a>";
	}else{
		echo "<a href='login.php'>".'游客'."</a>";
	}
?>
<?php

	//1.展示所有文章 2.展示搜索后的文章
	include "conn.php";
	if(isset($_GET['sub'])){
		$se=$_GET['search'];
		$e="title like '%".$se."%'";

	}else{
		$e=1;
	}
	//拼写查询语句
	$sql="select * from blog where $e order by blogid desc";
	//发送查询给数据库
	$query=mysqli_query($link,$sql);
	//转换出一行数组
	// $result=mysqli_fetch_array($query);

	// echo "<pre>";
	// var_dump($result);
	// echo "</pre>";

	// for ($i=0; $i<5 ; $i++) { 
	while($rs=mysqli_fetch_array($query)){
	
?>
<h2><a href="view.php?id=<?php echo $rs['blogid']; ?>">标题:<?php echo  $rs['title']; ?></a> | <a href="edit.php?id=<?php echo $rs['blogid']; ?>">编辑</a> | <a href="del.php?id=<?php echo $rs['blogid']; ?>">删除</a></h2>
<p><?php echo iconv_substr($rs['content'],0,4 ) ?>...</p>
<li><?php echo $rs['time']; ?></li>
<hr/>
<?php
	}
?>
	
