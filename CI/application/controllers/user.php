<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class User extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		public function index(){
			//echo 123;
		}
		public function reg(){
			$this->load->view('reg.php');
		}
	}
?>