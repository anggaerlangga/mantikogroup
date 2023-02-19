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
		 $this->load->view('/common/banner', $banner);
		 $this->load->view('/public/company');
		//  $this->load->view('/common/footer');

	}
}
