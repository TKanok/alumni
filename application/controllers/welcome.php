<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// Your own constructor code
	}

	public function index()
	{
		$this->load->view('login/login');
		$this->load->view('login/login_css');
	}

	public function R_cadet()
	{
		$this->load->view('cadet/R_cadet');
		$this->load->view('cadet/R_cadet_css');
	}

	public function S_cadet()
	{
		$this->load->view('cadet/S_cadet');
		$this->load->view('cadet/S_cadet_css');
	}
	
	public function P_cadet()
	{
		$this->load->view('cadet/P_Cadet');
		$this->load->view('cadet/P_Cadet_css');
	}

	public function C_Edit(){
		$this->load->view('cadet/Edit_Cadet');
		$this->load->view('cadet/Edit_Cadet_css');
	}

	public function TR_cadet()
	{
		$this->load->view('teacher/TR_cadet');
		$this->load->view('teacher/TR_cadet_css');
	}
	
	public function TS_cadet()
	{
		$this->load->view('teacher/TS_cadet');
		$this->load->view('teacher/TS_cadet_css');
	}

	public function TP_cadet(){
		$this->load->view('teacher/TP_Cadet');
		$this->load->view('teacher/TP_Cadet_css');
	}

	public function TP_edit()
	{
		$this->load->view('teacher/T_Edit');
		$this->load->view('teacher/T_Edit_css');
	}

	public function PD_(){
		$this->load->view('PD');
		$this->load->view('PD_css');
	}

}