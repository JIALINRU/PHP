<?php
	
	$.get('PHP地址','值',function(data){
		
	},text);
	
	http text xml json
	
	我叫小红 年龄18 来自湖南 
	<persons>
		<person>
			<name>小红</name>
			<age>18</age>
			<place>湖南</place>
		</person>
	</persons>
	
	json_encode($value)  json_decode($json)
	
	$str={'name':'小红','age':18,'place':'湖南'}
	
	eval
	
	echo $str.name
	
	
	<table>
		<tr>
			<th>姓名</th>
			<th>年龄</th>
			<th>地点</th>
		</tr>
		<tr>
			<td>小红</td>
			<td>18</td>
			<td>湖南</td>
		</tr>
	</table>
	
	
	
	
	
	PHP地址  php文件  index.php
	       restful /user/reg

	include "conn.php";
	if($_GET['id']==123){
		echo '用户名已存在';
	}
	
	//(1)id=123 (2)当前页面刷新了 用户体验不好 (3)view显示上多出无意义输出
	
	（1）获取input name值  this.value  //this.val('laoshan')
	（2）把name值提交给一个PHP文件
	get: url?键名=键值 
	
	
	$.get/post('php文件名',"username="+this.value,function(data){
		if(data='456'){
			oIput.after("<span>用户名已存在</span>");
		}
	})
	$_GET['键名']
	
	（3）PHP文件根据这个name值查询 return结果
	$name=$_GET['username'];  
	（4）判断返回结果 
	（5）根据返回结果 在input name后面做相应dom操作
	//oIput.after("<span>用户名已存在</span>")
	
	
?>

<form action="2.php" method="post">
	用户名:<input type="text" name="username"><br />
	密码:<input type="password" name="pass"><br />
	<input type="submit" name="sub" value="注册">
</form>