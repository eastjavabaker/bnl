<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index($type = 'all', $loader = '')
	{	
		$this->all();
	}

	function all($loader = ''){
		$data['type'] = 'all';
		if($loader == 'category_loader'){
		
			$this->load->view('view_gallery_category', $data);
		
		} else{
		
			// $this->load->view('view_header', array('menu'=>'gallery'));
			$this->load->view('view_gallery', $data);
			// $this->load->view('view_footer');
			
		}
	}	

	function photo($loader = ''){
		$data['type'] = 'photo';

		if($loader == 'category_loader'){
		
			$this->load->view('view_gallery_category', $data);
		
		} else{
		
			// $this->load->view('view_header', array('menu'=>'gallery'));
			$this->load->view('view_gallery', $data);
			// $this->load->view('view_footer');
			
		}
	}	

	function video($loader = ''){
		$data['type'] = 'video';

		if($loader == 'category_loader'){
		
			$this->load->view('view_gallery_category', $data);
		
		} else{
		
			// $this->load->view('view_header', array('menu'=>'gallery'));
			$this->load->view('view_gallery', $data);
			// $this->load->view('view_footer');
			
		}
	}

	public function detail($loader = '')
	{	
		$this->load->view('view_gallery_detail');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */