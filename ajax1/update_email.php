<?php 
	include "conn.php";
	$email=$_POST['email'];
	$user_id=$_POST['user_id'];
	
	mysqli_query($link,"update ajax set email='$email' where user_id=$user_id");
	if(mysqli_affected_rows()>0){
		echo "success";
	}else{
		echo "error";
	}
?> 