<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TestMang_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$Thucdon = array(
			'ansang' => array(
				'khaivi' => array(
					'soup' => "cua",
					'ruou' => "vodka"),
				'monchinh'=> array(
					'com' => "comrang",
					'pho' => "phobo"),
				'trangmieng'=> array(
					'kem' => "dau",
					'nuoc' =>"pepsi",)
			),
			'antrua' => array(
				'khaivi' => array(
					'soup' => "cua",
					'ruou' => "vodka"),
				'monchinh'=> array(
					'com' => "comrang",
					'pho' => "phobo"),
				'trangmieng'=> array(
					'kem' => "dau",
					'nuoc' =>"pepsi",)
			),
			'antoi' => array(
				'khaivi' => array(
					'soup' => "cua",
					'ruou' => "vodka"),
				'monchinh'=> array(
					'com' => "comrang",
					'pho' => "phobo"),
				'trangmieng'=> array(
					'kem' => "dau",
					'nuoc' =>"pepsi",)
			),
			
		);

		foreach ($Thucdon as $key => $value) {
			echo "Key :" .$key;
			//echo "gia tri la : $value";
			echo "<br>";
			foreach ($value as $key2 => $value2) {

				echo "Key : " .$key2;
				//echo "gia tri la : $value2";
				echo "<br>";
				foreach ($value2 as $key3 => $value3) {

					echo "Key : " .$key3;
					echo "<br>";
				    echo "gia tri la : $value3";
				    echo "<br>";				}
				   

			}
			echo "<hr>";
		}
	}

}

/* End of file TestMang_Controller.php */
/* Location: ./application/controllers/TestMang_Controller.php */