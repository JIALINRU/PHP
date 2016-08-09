<?php
	class Rili{
		public $year;
		public $month;
		public $firstday;
		public function __construct(){
			$this->year=date('Y');
			$this->month=date('m');
			$this->firstday=date('');
		}
		public function out(){
			echo "<table align='center'>";
			$this->weekList();
			echo "</table>";
		}
		public function weekList(){
			$arr=array('日','一','二','三','四','五','六');
			echo "<tr>";
			for ($i=0; $i <count($arr) ; $i++) { 
				echo "<th class='fondb'>";
				echo $arr[$i];
				echo "</th>";

			}
			echo "</tr>";

		}

	}
?>