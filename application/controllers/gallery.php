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
                $this->load->model('Gallerymodel');
		if($loader == 'category_loader'){
		        $data['query'] = $this->Gallerymodel->get_gallery_albums_list();
			$this->load->view('view_gallery_category', $data);
		
		} else{
		        $data['query'] = $this->Gallerymodel->get_gallery_albums_list();
			// $this->load->view('view_header', array('menu'=>'gallery'));
			$this->load->view('view_gallery', $data);
			// $this->load->view('view_footer');
		}
	}	

	function photo($loader = ''){
		$data['type'] = 'photo';
                $this->load->model('Gallerymodel');
		if($loader == 'category_loader'){
		        $data['query'] = $this->Gallerymodel->get_gallery_albums_list(1);
			$this->load->view('view_gallery_category', $data);
		
		} else{
		        $data['query'] = $this->Gallerymodel->get_gallery_albums_list(1);
			// $this->load->view('view_header', array('menu'=>'gallery'));
			$this->load->view('view_gallery', $data);
			// $this->load->view('view_footer');
			
		}
	}	

	function video($loader = ''){
		$data['type'] = 'video';
                $this->load->model('Gallerymodel');
		if($loader == 'category_loader'){
		        $data['query'] = $this->Gallerymodel->get_gallery_albums_list(2);
			$this->load->view('view_gallery_category', $data);
		
		} else{
		        $data['query'] = $this->Gallerymodel->get_gallery_albums_list(2);
			// $this->load->view('view_header', array('menu'=>'gallery'));
			$this->load->view('view_gallery', $data);
			// $this->load->view('view_footer');
			
		}
	}

	public function detail($loader = '')
	{	
	    $this->load->model('Gallerymodel');
            $data['query'] = $this->Gallerymodel->get_gallery_list_by_album($loader);	
            $this->load->view('view_gallery_detail', $data);
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */