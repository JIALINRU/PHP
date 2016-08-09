<meta charset="utf-8" />
<form action="test2.php" method="GET">
	<table border="1" align="center" width="500">
		<tr>
			<td>
				<input type="text" name="num1"></input>
			</td>
			<td>
				<select name="ysf">
					<option value="+">+</option>
					<option value="-">-</option>
					<option value="*">*</option>
					<option value="/">/</option>
					<option value="%">%</option>
				</select>
			</td>	
			<td>
				<input type="text" name="num2"></input>
			</td>
			<td>
				<input type="submit" name="sub" value="计算" />
			</td>
		</tr>
		<?php
			if(isset($_get['sub'])){
				echo "<tr>";
				echo "<td colspan='4'>"."结果为：".$num1." ".$ysf." ".$num2."=".$num."</td>";
				echo "<tr>";
			}
		?>
	</table>
</form>
<?php
	if(isset($_get['sub'])){
		$num1=$_GET['num1'];
		$num2=$_GET['num2'];
		$ysf=$_GET['ysf'];
		switch ($ysf) {
			case '+':
				$sum=$sum1+$sum2;
				break;
			case '-':
				$sum=$sum1-$sum2;
				break;
			case '*':
				$sum=$sum1*$sum2;
				break;
			case '/':
				$sum=$sum1/$sum2;
				break;
			case '%':
				$sum=$sum1%$sum2;
		}
	}




?>









