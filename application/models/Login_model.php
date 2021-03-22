<?php 

 class Login_model extends CI_Model
 {
 	
 	public function cek_login($where)
 	{
 		return $this->db->get_where('tb_user',$where);
 	}
 } ?>