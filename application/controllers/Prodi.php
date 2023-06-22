<?php
class prodi extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model)prodi');
    }

    function index(){
        $data['record'] = $this->model)prodi->tampilkan_data();
        $this->load->view('prodi/lihat_data',$data);
    }

    function tambah() {
        if(isset($_POST['submit'])){
            $this->model)prodi->tambah();
            redirect('prodi');
        }
        else {
            $this->load->view('prodi/form_input');
        }
    }

    function edit() {
        if(isset($_POST['submit'])){
            $this->model)prodi->edit();
            redirect('prodi');
        }
        else {
            $id = $this->uri->segment(3);
            $data['record']=$this->model)prodi->get_one($id)->row_array();
            $this->load->view('prodi/form_edit',$data);
        }
    }
    function detail() {
        if(isset($_POST['submit'])){
            $this->model)prodi->edit();
            redirect('prodi');
        }
        else {
            $id = $this->uri->segment(3);
            $data['record']=$this->model)prodi->get_one($id)->row_array();
            $this->load->view('prodi/form_edit',$data);
        }
    }

    function delete() {
        $id = $this->uri->segment(3);
        $this->model)prodi->delete($id);
        redirect('prodi');
        }   
    }