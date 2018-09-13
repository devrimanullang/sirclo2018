<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Berat extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('data_model','',TRUE);		
	}
	
	public function index(){
		$data['q']=$this->data_model->getData();
		$this->load->view('firstpage',$data);
	}
	
	public function create(){
		$this->load->helper(array('form'));
		$this->load->view('formpage');
	}
	
	public function addberat(){		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('date', 'Tanggal', 'required');
		$this->form_validation->set_rules('max', 'Berat Max', 'required');
		$this->form_validation->set_rules('min', 'Berat Min', 'required');
		if ($this->form_validation->run() == FALSE){				
				$this->load->view('formpage');
			}
			else{
				$this->data_model->addberat($_POST);
				redirect();
			}
	}
	
	public function detail(){
		$id = $_GET["id"];
		$data['q']=$this->data_model->getData($id);
		$this->load->view('detailpage',$data);
	}
	
	public function edit(){
		$id = $_GET["id"];
		$data['q']=$this->data_model->getData($id);
		$this->load->helper(array('form'));
		$this->load->view('formpage',$data);
	}
	
	public function editberat(){
		$this->data_model->editberat($_POST);
		redirect();
	}
	
	public function delete(){
		$id = $_GET["id"];
		$this->data_model->deleteberat($id);
		redirect();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */