<?php
	if(isset($_POST['sub'])){
		$rows=$_POST['rows'];
		$cols=$_POST['cols'];
		echo "<table border='1' align='center'>";
		for($i=0;$i<$rows;$i++){
			echo "<tr>";
			for($j=0;$j<$cols;$j++){
				echo "<td></td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
?>
<form action="test3.php" method="post">
	