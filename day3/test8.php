<?php
	$dirname='C:\MASM';
	
	function total($dirname,$dirnum,$filenum){
		$dir=opendir($dirname);
		readdir($dir)."<br/>";
		readdir($all)."<br/>";
		
		while(($filename=readdir($dir))){
			$newfile=$dirname.'/'.$filename;
	
	
	
	// function readFileDir(){
		// if(!is_dir($dir)){
			// return false;
		// }
		// $handle=opendir($dir);
		// while(($file=readdir($handle)) !=FALSE){
			// if($file=='.' || $file=='..'){
				// continue;
			// }
			// $file=$dir.DIRECTORY_SEPARATOR.$file;
			// if(is_file($file)){
				// echo $file."<br/>";
			// }else if(is_dir($file)){
				// readFileDir($file);
			// }
			
		}
	}
?>