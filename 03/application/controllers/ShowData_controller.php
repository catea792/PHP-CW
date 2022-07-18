<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ShowData_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//$this->load->view('ShowData_view');
		$this->load->model('showData_model');
		$dulieu = $this->showData_model->Getdatabase();
		$dulieu = array('dulieutucontroller' => $dulieu);
		//echo '<pre>';
		//var_dump($dulieu);
		$this->load->view('ShowData_view', $dulieu, FALSE);

		

	}

	public function deleteData($idget)
	{
		//$this->input->post('id')
		$this->load->model('showData_model');
		//$this->showData_model->deleteDataById($idget);

		if($this->showData_model->deleteDataById($idget)){
			$this->load->view('thanhcong_view'); 
		}
	}
	public function editData($idget)
	{
		$this->load->model('showData_model');
		$ketqua = $this->showData_model->editByID($idget);
		$ketqua = array('mangketqua' => $ketqua);
		
		$this->load->view('editData_view', $ketqua, FALSE);
	}
	public function updatedulieu()
	{
		$this->load->model('showData_model');
		$id = $this->input->post('id');
		$so = $this->input->post('so');
		$gia = $this->input->post('gia');
		
		if($this->showData_model->UpdateDataByID($id,$so,$gia))
		{
			echo 'thanh cong';
		}

	}


}

/* End of file ShowData_controller.php */
/* Location: ./application/controllers/ShowData_controller.php */