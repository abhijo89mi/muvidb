<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');

		$data['home'] = strtolower(__CLASS__).'/';
		$this->load->vars($data);
	}


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('Model_main','welcome');
		$data['data'] = $this->welcome->welcome_page(); 
		
		$this->load->library('highcharts');
		$this->highcharts->set_type('pie'); // drauwing type
		$this->highcharts->set_ax('true'); // drauwing type
		$this->highcharts->set_dimensions(800, 800); // drauwing type
		$this->highcharts->set_title('TOTAL DATABSE INFORMATION', 'Via Table'); // set chart title: title, subtitle(optional)
		$this->highcharts->set_axis_titles('Table Name', 'Total Records'); // axis titles: x axis,  y axis
		
		$credits->href = 'http://www.muvidb.com/';
		$credits->text = "International Move Database";
		$this->highcharts->set_credits($credits);
		$x = array();
		$y = array();
		foreach($data['data'] as $k=>$v):
			if ($v >0)
				array_push($x,array($k,$v));
				array_push($y,$k);
		endforeach;
		$serie['data'] = $x;
		$d['axis']['categories'] = $y;
		$this->highcharts->set_xAxis($d['axis']);
		$data['charts'] = $this->highcharts->set_serie($serie)->render();
		$this->load->view('welcome_message',$data);
	}
	public function data()
	{
		#$data = array()
		$this->load->model('Model_main','welcome');
		$data['data'] = $this->welcome->welcome_page(); 
		$this->load->view('data',$data);
	}
	public function graph(){
		$this->load->library('highcharts');
		
		$this->highcharts->set_type('column'); // drauwing type
		$this->highcharts->set_ax('true'); // drauwing type
		$this->highcharts->set_dimensions(600, 800); // drauwing type
		$this->highcharts->set_title('TOTAL DATABSE INFORMATION', 'Via Table'); // set chart title: title, subtitle(optional)
		$this->highcharts->set_axis_titles('Table Name', 'Total Records'); // axis titles: x axis,  y axis

		
			// we can user credits option to make a link to the source article.
			// it's possible to pass an object instead of array (but object will be converted to array by the lib)
			$credits->href = 'http://www.muvidb.com/';
			$credits->text = "International Move Database";
			$this->highcharts->set_credits($credits);
		$x = array();
		$y = array();
		$this->load->model('Model_main','welcome');
		$data = $this->welcome->welcome_page();
		foreach($data as $k=>$v):
			if ($v >0)
				array_push($x,$v);
				array_push($y,$k);
		endforeach;
		$serie['data'] = $x;
		$d['axis']['categories'] = $y;
		$this->highcharts->set_xAxis($d['axis']);
		$this->highcharts->set_global_options(array('inverted'=>'true'),'gdjgl');
		$data['charts'] = $this->highcharts->set_serie($serie)->render();
		$this->load->view('graph',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
