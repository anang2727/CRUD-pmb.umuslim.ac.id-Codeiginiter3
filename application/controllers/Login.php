<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('global_model');
    }

    public function index(){
        $this->load->view('cama_view/buat_akun_view');
    }
    
    public function auth() {
        if (isset($_POST['submit'])){
        $var_usn = $this->input->post('username');
        $var_psw = $this->input->post('password');
        $hasil = $this->global_model->login($var_usn, $var_psw);
        if ($hasil==1){
            $this->session->set_userdata(array('status_login'=>'oke'));
            redirect(base_url('dashboard'));
          
//          redirect('dashboard');
//          $query = $this->db->get_where('tb_auth', array('username' => $var_usn));
//          $seb = $query->row()->sebagai;

//          $this->db->where('username',$var_usn);
//         $this->db->update('tb_auth', array('last_login'=>date('Y-m-d H:i:s')));

//            if ($seb=="Admin"){
//                $sess_data['username'] = $query->row()->username;
 //               $sess_data['sebagai']  = $seb;
//                $sess_data['page']  = 'admin';
//               $this->session->set_userdata($sess_data);
//                redirect(base_url($sess_data['page']));
//            }
            } else {
                redirect('login');
            }
        } else {
            $this->load->view('cama_view/buat_akun_view');
        }
        
    }






    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}


