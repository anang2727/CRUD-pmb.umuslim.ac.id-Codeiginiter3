<?php
class registrasi extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_registrasi');
    }

    function index(){
        $data['record'] = $this->model_registrasi->tampilkan_data();
        $this->load->view('registrasi/form_input',$data);
    }

    function tambah() {
        if(isset($_POST['submit'])){
            $this->model_registrasi->tambah();
            redirect('registrasi');
        }
        else {
            $this->load->view('registrasi/form_input');
        }
    }

    function edit() {
        if(isset($_POST['submit'])){
            $this->model_registrasi->edit();
            redirect('registrasi');
        }
        else {
            $id = $this->uri->segment(3);
            $data['record']=$this->model_registrasi->get_one($id)->row_array();
            $this->load->view('registrasi/form_edit',$data);
        }
    }

    function delete() {
        $id = $this->uri->segment(3);
        $this->model_registrasi->delete($id);
        redirect('registrasi');
        }   
    }