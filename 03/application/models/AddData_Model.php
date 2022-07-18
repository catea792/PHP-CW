<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddData_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function Insert($s,$g)
	{
		$dulieu = array('so' =>$s ,'gia' =>$g );
		$this->db->insert('sosim', $dulieu);
		return $this->db->insert_id();
		

	}

}

/* End of file AddData_model.php */
/* Location: ./application/models/AddData_model.php */