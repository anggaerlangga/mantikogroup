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
		 $this->load->view('/public/company/about');
		//  $this->load->view('/common/footer');

	}

	public function mantikotravel()
	{
		$this->load->view('/common/header');
		$this->load->model("pages_model");
		$data["about"] = $this->pages_model->getAboutMantiko();
		$data["product"] = $this->pages_model->getProductMantiko();
		$data["tim"] = $this->pages_model->getTimMantiko();
		$this->load->model("gallery_model");
		$data["gallery"] = $this->gallery_model->getGalleryMantiko();
		$this->load->view('/public/company/mantikotravel', $data);
		$this->load->view('/common/footer');
	}

	public function kakoto()
	{
		$this->load->view('/common/header');
		$this->load->view('/public/company/kakoto');
		$this->load->view('/common/footer');
	}

	public function vidtron()
	{
		$this->load->view('/common/header');
		$this->load->model("pages_model");
		$data["about"] = $this->pages_model->getAboutVidtron();
		$data["product"] = $this->pages_model->getProductVidtron();
		$data["tim"] = $this->pages_model->getTimVidtron();
		$this->load->model("gallery_model");
		$data["gallery"] = $this->gallery_model->getGalleryVidtron();
		$this->load->view('/public/company/vidtron', $data);
	}

	public function mgi()
	{
		$this->load->view('/common/header');
		$this->load->view('/public/company/mgi');
		$this->load->view('/common/footer');
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
