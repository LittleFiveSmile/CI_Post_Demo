<?php
	class Post_model extends CI_Model{
		public function __construct()
		{
			$this->load->database();
		}

		public function get_posts($slug =FALSE){
			if($slug ===FALSE){
				$this -> db ->order_by('id','DESC');
				$query = $this ->db ->get('posts'); //SELECT * FROM posts (table)
				return $query -> result_array(); //这个方法以 一个纯粹的数组 形式返回查询结果，如果无结果，则返回一个空数组。
			}

			$query = $this->db ->get_where('posts',array('slug' => $slug)); //get_where() 第一个参数是表格名字，第二个参数是 where的选择语句
			return $query->row_array(); //回结果是一个数组，参数可以用来选择第几行的数，比如0 是第一行的数据。如果无参数，则默认取第一行
		}

		public function create_post(){
			$slug = url_title($this ->input->post('title'));

			$data = array(
				'title' =>$this ->input ->post('title'),
				'slug' =>$slug,
				'body' => $this -> input ->post('body')
			);
			return $this -> db -> insert('posts',$data);
		}
		public function delete_post($id){
			$this->db->where('id',$id);
			$this ->db->delete('posts');
			return true;
		}

		public function update_post(){

			$slug = url_title($this ->input->post('title'));

			$data = array(
				'title' =>$this ->input ->post('title'),
				'slug' =>$slug,
				'body' => $this -> input ->post('body')
			);
			$this ->db->where('id',$this ->input->post('id'));
			return $this -> db -> update('posts',$data);
		}
	}
