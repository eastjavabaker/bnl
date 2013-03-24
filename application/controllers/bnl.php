<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class bnl extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index($loader = '')
	{	

			$this->load->view('view_header', array('menu'=>'home'));
			$this->load->view('view_bnl');
			$this->load->view('view_footer');
		
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */