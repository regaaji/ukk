<?php 

/**
 * 
 */
class Daftar_model extends CI_Model
{
	

	public function cekUsername($username)
	{
		return $this->db->get_where('tb_user', ['username' => $username]);
	}
}