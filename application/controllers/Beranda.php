<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Beranda extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('user/beranda');
	}
}

/* End of file Welcome.php */
/* Location: ./application/controllers/Welcome.php */
