<?php
	class vote_model extends CI_Model{
		function add_data($data,$table){
			$this->db->insert($table,$data);
		}

		function update_data($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}	

		function select_data($where,$table){		
			return $this->db->get_where($table,$where);
		}
	}
?>