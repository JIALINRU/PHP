<?php
	setcookie('name','laoshan',time()+20);
	if($_COOKIE['name']){
		echo "123";
	}else{
		echo "456";
	}
?>