<html>
	<meta charset="utf-8">
	<head>
		<title>±í¸ñÐÞ¸Ä</title>
		
		<script type="text/javascript" src="jquery.min.js"></script>
	</head>
	<body>
		<table border="1">
	<tr>
		<th>user_id</th>
		<th>username</th>
		<th>password</th>
		<th>email</th>
	</tr>
	<?php
		include "conn.php";
		
		$sql="select * from ajax";
		$query=mysqli_query($link,$sql);
		//var_dump($query);
		//die();
		while($rs=mysqli_fetch_array($query)){
	?>
	
		
		<tr>
			<td class="11"><?php echo $rs['user_id'];?></td>
			<td><?php echo $rs['username'];?></td>
			<td><?php echo $rs['password']?></td>
			<td class="editable" user_id="<?php echo $rs['user_id'];?>"><?php echo $rs['email'];?></td>
		</tr>
	<?php } ?>
	</table>
	
	<script>
		$(function(){
			/*
			$('.editable').on('dbclick',function(){
				alert("aaa");
				//var $input=$('<input type="text" id="edit_input">');
				//$input.appendTo(this);
			});*/
			
			//dblclick
			
			$('.editable').click(function(){
				var $input;
				var $td=$(this);
				if($(this).children('input').length==0){
					//alert("aa");
					$input=$('<input type="text" id="edit_input">');
					//$input.appendTo(this);
					var tdData=this.innerHTML;
					$(this).empty();
					//$input.val(this.innerHTML).appendTo(this);
					//$(this).html(""); $this.empty();
					$input.val(tdData).appendTo(this);
				}
				
				$input.on('keydown',function(e){
					var _this=this;
					if(e.which==13){
						//alert(e.which);
						$.post("update_email.php","email="+this.value + "&user_id="+$(this).parent().attr('user_id'),function(data){
							if(data=="success"){
								$td.html(_this.value);
							}
						},"text");
					}
				});
				
			});
			
			$('.11').click(function(){
				alert("aaa");
			});
			
		});
	</script>
	</body>
</html>







