<?php defined('BASEPATH') or exit('No direct script access allowed');
class buat_akun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $cek = $this->session->userdata('status-login');
        $sebagai = $this->session->userdata(base_url() . 'login-sebagai');
        if ($cek == 'login-berhasil' && $sebagai == 'cama') {
            header('location:' . base_url('dashboard'));
        } else {
            $this->load->view('cama_view/buat_akun_view');
        }
    }
}
