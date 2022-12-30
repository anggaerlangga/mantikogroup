<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Proyek extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('proyek_model');
        $this->load->library("form_validation");
        $this->load->model("user_model");
        if(!$this->user_model->current_user()){
			redirect('admin/login');
		}
    }

    public function index()
    {
        $data["proyek"] = $this->proyek_model->getAll();
        $this->load->view("admin/proyek/list", $data);
    }
 
    public function add()
    {
        $proyek = $this->proyek_model; // objek model
        $data['proyek'] = $this->proyek_model->getAll();
        $validation = $this->form_validation; // objek form validation
        $validation->set_rules($proyek->rules()); // terapkan rules

        if($validation->run()) { // melakukan validasi
           $proyek->save(); // simpan data ke database
           $this->session->set_flashdata('success', 'Berhasil disimpan'); // tampilkan pesan berhasil
        }

        $this->load->view("admin/proyek/new_form", $data); // tampilkan form add
    }

    public function edit($id = null) // id data yang akan diedit
    {
        if (!isset($id)) redirect('admin/proyek'); // kita lakukan redirect ke route ini kalau $id bernilai null

        $proyek = $this->proyek_model; // objek model
        $validation = $this->form_validation; // objek validation
        $validation->set_rules($proyek->rules()); 

        if($validation->run()) { // melakukan validasi
            $proyek->update(); // menyimpan data
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["proyek"] = $proyek->getById($id); // mengambil data untuk ditampilkan pada form
        if(!$data["proyek"]) show_404(); // jika tidak ada data, tampilkan error 404

        $this->load->view("admin/proyek/edit", $data); // menampilkan form edit
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if($this->proyek_model->delete($id)) {
            redirect(site_url('admin/proyek'));
        }
    }

}