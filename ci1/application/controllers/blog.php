<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Blog extends CI_Controller{
		public function __construct(){
			parent::__construct();
		}
		
		public function index(){
			
			$this->load->model('blog_model');
			$rs=$this->blog_model->get_article();
			
			$arr['blog']=$rs;
			
			$this->load->view('index.php',$arr);
		}
		
		public function update(){
			$id=$this->uri->segment(3);
			$this->load->model('blog_model');
			$result=$this->blog_model->update_attr($id);
			$arr['up']=$result;
			$this->load->view('update.php',$arr);
		}
		
		public function do_update(){
			$title=$this->input->post('title');
			$con=$this->input->post('con');
			$hid=$this->input->post('hid');
			
			$this->load->model('blog_model');
			$result=$this->blog_model->update_id($hid,$title,$con);
			if($result){
				redirect('blog/index');
			}
		}
		
		public function del(){
			//$id=$this->input->get('id');
			//echo $id;
			$id=$this->uri->segment(3);
			//echo $id;
			$this->load->model('blog_model');
			$result=$this->blog_model->del_attr($id);
			if($result){
				//redirect('blog/index');
				$this->index();
			}else{
				//$this->
				echo "删除失败";
			}
		}
	}


?>