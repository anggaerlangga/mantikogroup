<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

    public function index()
	{
		//  $this->load->model("banner_model");
		//  $banner["banner"] = $this->banner_model->getAll();

		 $this->load->view('/common/header');
		 $this->load->view('/public/company');
		//  $this->load->view('/common/footer');

	}

	public function mantikotravel()
	{
		$this->load->view('/common/header');
		$this->load->view('/public/company/mantiko');
	}

	public function kakoto()
	{
		$this->load->view('/common/header');
		$this->load->view('/public/company/kakoto');
	}

	public function vidtron()
	{
		$this->load->view('/common/header');
		$this->load->view('/public/company/vidtron');
	}

	public function mgi()
	{
		$this->load->view('/common/header');
		$this->load->view('/public/company/mgi');
	}

	public function dkapau()
	{
		$this->load->view('/common/header');
		$this->load->view('/public/company/dkapau');
	}

	public function ufenterprise()
	{
		$this->load->view('/common/header');
		$this->load->view('/public/company/ufenterprise');
	}
}
