<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
        
        private function seo($input) {
        $input = str_replace("&nbsp;", " ", $input);
        $input = str_replace(array("'", "-"), "", $input); //remove single quote and dash
        $input = mb_convert_case($input, MB_CASE_LOWER, "UTF-8"); //convert to lowercase
        $input = preg_replace("#[^a-zA-Z]+#", "-", $input); //replace everything non an with dashes
        $input = preg_replace("#(-){2,}#", "$1", $input); //replace multiple dashes with one
        $input = trim($input, "-"); //trim dashes from beginning and end of string if any
        return $input;
    }

    public function index($loader = '') {

        $this->load->view('view_article');
    }

	public function detail($loader = '')
	{	
                if(isset($_GET['_escaped_fragment_'])){
			echo "content from ajax";exit();
		}
		$this->load->view('view_article_detail');
	}


	public function reviews($loader = '')
	{	

		$this->load->view('view_article_reviews');
	}	

	public function fun_facts($loader = '')
	{	

		$this->load->view('view_article_funfact');
	}	

	public function today_in_history($loader = '')
	{	

		$this->load->view('view_article_todayinhistory');
	}

	public function news(){
		$this->load->view('view_article_news');
	}

	public function interview(){
		$this->load->view('view_article_interview');
	}

	public function eventreport(){
		$this->load->view('view_article_eventreport');
	}

	public function dothemath(){
		$this->load->view('view_article_dothemath');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */