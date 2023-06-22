<?php
class Dashboard extends CI_Controller{
    
    
    function index(){
        chek_session();
        $this->load->view('view_dashboard');
    }


    // public function index() {
        
    //     $data['title'] = 'Admin | Dashboard';
    //     $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
    //     //echo 'Selamat datang ' . $data['user']['name'];
        
    //     $this->load->view('admin/index', $data);
        
    // }
}