<?php
	//1:bool copy  (string $source , string $dest)
	//2:bool chown (string $filename , mixed $user)
	//带有mixed ,表示你可以传任意类型的数据
	//ugo   user group other
	//3:bool arsort  (array &$array........)
	//带有&参数的函数，表示引用赋值 带有[]的时候里面的参数可选
	//4:int array_unshift  (array &$array , mixed $var [,mixed $..............])
	//带有...表示可以传递多个任意参数
	//5: array array_filter(array $input[,callable $callback = ""...])
	//callable 回调函数
	
	function demo(){
		$args=func_get_args();
		$sum=0;
		for($i=0;$i<count($args);$i++){
			$sum+=$args[$i];
		}
		echo $sum;
		
	}
	demo(1,2,3,4,5,6,7,8,9)
	
	
	
	/*function aa($a,$b=3) {
		echo $a."||".$b."<br/>";
	}
	aa(4,7);
	aa(9);*/
?>