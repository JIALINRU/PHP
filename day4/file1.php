<?php
	if(isset($_POST['sub'])){
		$sfile=$_FILES['sfile'];
		$sfile1=$_FILES['sfile1'];
		$arr[0]=$sfile;
		$arr[1]=$sfile1;
		echo "<pre>";
		var_dump($arr);
		echo "</pre>";
		echo "</br>";
		


	}
?>

<form action="file1.php" method="post" enctype="multipart/form-data">
	<input type='file' name='sfile'></br>
	<input type='file' name='sfile1'></br>
	<input type="submit" name="sub" value="上传">
</form>