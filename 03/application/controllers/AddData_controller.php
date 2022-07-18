<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddData_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
	    $this->load->view('AddData_View');

	}
	public function insertData_controller()
	{
		//lay du lieu ve
		$sdt =  $this->input->post('so');
		$gt =  $this->input->post('gia');
		//truyen vao model
		$this->load->model('AddData_model');
		if ($this->AddData_model->insert($sdt,$gt)) {
			echo "insert thanh cong";
			$this->load->view('Thanhcong_view');
		}
		else {
			echo "insert khong thanh cong";
		}
	}
		

}

/* End of file AddData_controller.php */
/* Location: ./application/controllers/AddData_controller.php */