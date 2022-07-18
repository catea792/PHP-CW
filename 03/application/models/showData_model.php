<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class showData_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function Getdatabase()
	{
		//$this->db->select('*');
		$ketqua = $this->db->get('sosim');
		$ketqua = $ketqua->result_array();
		return $ketqua;
		//echo '<pre>';
		//var_dump($ketqua);
	}
	public function deleteDataById($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('sosim');
			
	}
	public function editById($id1)
	{
		$this->db->select('*');
		$this->db->where('id', $id1);
		$dulieu = $this->db->get('sosim');
		$dulieu = $dulieu->result_array();
		//echo "<pre>" ;
		//var_dump($dulieu);
		return $dulieu;
	}

	public function UpdateDataByID($id,$so,$gia)
	{
		$dataUpdate = array(
           'id' => $id,
           'so' => $so,
           'gia' => $gia

		);
		$this->db->where('id', $id);
		return $this->db->update('sosim', $dataUpdate);

	}

}

/* End of file showData_model.php */
/* Location: ./application/models/showData_model.php */