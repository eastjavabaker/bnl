<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index($loader = '')
	{	
		$this->load->view('view_event');

	}	

	public function detail($loader = '')
	{	
		$this->load->view('view_event_detail');		
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */