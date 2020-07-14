<?php

?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{

	public $table = '_user';


	function password_verify($password, $hash)
	{
		$cek = password_verify($password, $hash);
		return $cek;
	}


	function login($username, $password)
	{

		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query =  $this->db->get($this->table);

		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	//    untuk mengambil data hasil login
	function data_login($username)
	{

		$this->db->where('username', $username);

		return $this->db->get($this->table)->row();
	}
}
/* End of file login_model.php */
/* Location: ./application/models/login_model.php */
