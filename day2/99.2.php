<?php
	//输出99乘法表
	echo "<table border='1' width='900' >";
	for($i=1;$i<10;$i++){
		echo "<tr>";
		for($j=9;$j>=$i;$j--){
			echo "<td>";
			echo  $i." * ".$j." = ".$i*$j;
			echo "</td>";
		}
		// echo "<br>";
		echo "</tr>";
	}
	echo "</table>";
?>