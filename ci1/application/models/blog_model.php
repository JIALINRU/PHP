<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Blog_model extends CI_Model{
		public function get_article(){
			$query=$this->db->get('blog');
			return $query->result();
		}
		
		public function del_attr($id){
			$query=$this->db->delete('blog', array('blogid' => $id));
			return $query;
		}
		
		public function update_attr($id){
			$query=$this->db->get_where('blog',array('blogid'=>$id));
			return $query->row();
		}
		
		public function update_id($hid,$title,$con){
			$d=date('Y').'-'.date('m').'-'.date('d');
			$arr=array(
				'title'=>$title,
				'content'=>$con,
				'time'=>$d,
			);
			$this->db->where('blogid', $hid);
			$query=$this->db->update('blog', $arr);
			return $query;
			
			
		}
	}
	


?>