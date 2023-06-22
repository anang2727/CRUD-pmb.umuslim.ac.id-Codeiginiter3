<?php
class registrasi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_registrasi');
        $this->load->model('model_prodi');
    }

    function index()
    {
        $data['record'] = $this->model_registrasi->getDataregistrasi();
        $data['rec_prodi'] = $this->model_prodi->tampilkan_data();

        $this->load->view('registrasi/form_input', $data);
    }


    function tambah()
    {
        if (isset($_POST['submit'])) {
            $this->form_validation->set_rules('namaLengkap', 'Nama Lengkap', 'trim|required|min_length[4]');
            $this->form_validation->set_rules('nik', 'Nomor KTP', 'trim|required|min_length[16]|numeric');
            $this->form_validation->set_rules('suku', 'Tempat Lahir', 'trim|required|min_length[4]');
            $this->form_validation->set_rules('tpt_lahir', 'Tanggal Lahir', 'trim|required');
            $this->form_validation->set_rules('tgl_lahir', 'Jenis Kelamin', 'trim|required');
            $this->form_validation->set_rules('jenis_kelamin', 'Status', 'trim|required');
            $this->form_validation->set_rules('agama', 'Kewarganegaraan', 'trim|required');
            $this->form_validation->set_rules('tinggi', 'Tinggi Berat Badan', 'trim|required');
            $this->form_validation->set_rules('jalan', 'Jalan', 'trim|required');
            $this->form_validation->set_rules('dusun', 'Dusun', 'trim|required');
            $this->form_validation->set_rules('rt', 'RT', 'trim|required');
            $this->form_validation->set_rules('rw', 'RW', 'trim|required');
            $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'trim|required');
            $this->form_validation->set_rules('kelurahan', 'Kelurahan', 'trim|required');
            $this->form_validation->set_rules('kode_pos', 'Kode Pos', 'trim|required|min_length[4]|numeric');
            $this->form_validation->set_rules('telepon', 'Nomor Telephone', 'trim|required|min_length[9]|numeric');
            $this->form_validation->set_rules('hp', 'Nomor Handphone', 'trim|required|min_length[12]|numeric');
            $this->form_validation->set_rules('email', 'Email', 'trim|required');
            $this->form_validation->set_rules('status', 'Status', 'trim|required');
            $this->form_validation->set_rules('pendidikan_terakhir', 'Pendidikan Terakhir', 'trim|required');
            $this->form_validation->set_rules('nisn', 'NISN', 'trim|required|min_length[9]|numeric');
            $this->form_validation->set_rules('nama_sekolah', 'Asal Sekolah', 'trim|required');
            $this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required');
            $this->form_validation->set_rules('no_ijazah', 'Nomor Ijazah', 'trim|required|min_length[6]|numeric');
            $this->form_validation->set_rules('tempat_ijazah', 'Tempat Dikeluarkan Ijazah', 'trim|required');
            $this->form_validation->set_rules('tgl_ijazah', 'Tanggal dan Tahun Ijazah', 'trim|required');
            $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'trim|required|min_length[4]');
            $this->form_validation->set_rules('nik_ayah', 'Nomor KTP Ayah', 'trim|required|min_length[16]|numeric');
            $this->form_validation->set_rules('hubungan_ayah', 'Tempat Lahir Ayah', 'trim|required|min_length[4]');
            $this->form_validation->set_rules('tpt_lahir_ayah', 'Tanggal Lahir Ayah', 'trim|required');
            $this->form_validation->set_rules('tgl_lahir_ayah', 'Tanggal Lahir Ayah', 'trim|required');
            $this->form_validation->set_rules('status_ayah', 'Status Ayah', 'trim|required');
            $this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan Ayah', 'trim|required');
            $this->form_validation->set_rules('no_hp_ayah', 'No hp Ayah', 'trim|required');
            $this->form_validation->set_rules('telepon_ayah', 'No Tlp Ayah', 'trim|required');
            $this->form_validation->set_rules('alamat_rumah_ayah', 'Alamat Rumah Ayah', 'trim|required');
            $this->form_validation->set_rules('alamat_kantor_ayah', 'Alamat Kantor Ayah', 'trim|required');
            $this->form_validation->set_rules('nama_ibu', 'Nama ibu', 'trim|required|min_length[4]');
            $this->form_validation->set_rules('nik_ibu', 'Nomor KTP ibu', 'trim|required|min_length[16]|numeric');
            $this->form_validation->set_rules('hubungan_ibu', 'Tempat Lahir ibu', 'trim|required|min_length[4]');
            $this->form_validation->set_rules('tpt_lahir_ibu', 'Tanggal Lahir ibu', 'trim|required');
            $this->form_validation->set_rules('tgl_lahir_ibu', 'Tanggal Lahir ibu', 'trim|required');
            $this->form_validation->set_rules('status_ibu', 'Status ibu', 'trim|required');
            $this->form_validation->set_rules('pekerjaan_ibu', 'Pekerjaan ibu', 'trim|required');
            $this->form_validation->set_rules('no_hp_ibu', 'No hp ibu', 'trim|required');
            $this->form_validation->set_rules('telepon_ibu', 'No Tlp ibu', 'trim|required');
            $this->form_validation->set_rules('alamat_rumah_ibu', 'Alamat Rumah ibu', 'trim|required');
            $this->form_validation->set_rules('kelas', 'Kelas', 'trim|required');
            $this->form_validation->set_rules('ijazah', 'Ijazah', 'trim|required');
            $this->form_validation->set_rules('foto', 'foto', 'trim|required');
            $this->form_validation->set_rules('transkrip_nilai', 'Transkrip Nilai', 'trim|required');
            $this->form_validation->set_rules('kk', 'kk', 'trim|required');
            $this->form_validation->set_rules('kip', 'kip', 'trim|required');
            $this->form_validation->set_rules('id_prodi_1', 'Program Studi 1', 'trim|required');
            $this->form_validation->set_rules('id_prodi_2', 'Program Studi 2', 'trim|required');
            $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
            $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required|matches[password]');
            if ($this->form_validation->run()  ==  FALSE) {

                $data['record'] = $this->model_registrasi->getDataregistrasi();
                $data['rec_prodi'] = $this->model_prodi->tampilkan_data();

                //$this->db->insert('tb_registrasi',$data);
                $this->load->view('cama_view/buat_akun_view');
            } else {
                $this->model_registrasi->tambah();
                redirect('login');
            }
        } else {
            $this->load->model('model_prodi');
            $data['rec_prodi'] = $this->model_prodi->tampilkan_data();
            $this->load->view('registrasi/form_input', $data);
            // $this->load->view('registrasi/form_input');
        }
    }

    /*
    function tambah() {
         if(isset($_POST['submit'])){ 
               $this->form_validation->set_rules ('namaLengkap','Nama Lengkap','trim|required');
               $this->form_validation->set_rules ('username','Username','trim|required|confirmed/min_length[6]|max_lenght[12]');
               $this->form_validation->set_rules ('password','Password','trim|required|min_length[8]');
               $this->form_validation->set_rules ('passconf','Password confirmation','trim|required|match');

            if  ( $this -> form_validation -> run ()  ==  FALSE ) 
            { 

               $data['record']=$this->model_registrasi->getDataregistrasi(); 
               $data['rec_prodi'] = $this->model_prodi->tampilkan_data();

                    $this -> load -> view ( 'registrasi/form_input' ); 
            } 
            else
            { 
          

             $data = array(
                'namaLengkap' => $this->input->post('namaLengkap'),
                'nik' => $this->input->post('nik'),
                'suku' => $this->input->post('suku'),
                'tpt_lahir' => $this->input->post('tpt_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'agama' => $this->input->post('agama'),
                'tinggi' => $this->input->post('tinggi'),
                'jalan' => $this->input->post('jalan'),
                'dusun' => $this->input->post('dusun'),
                'rt' => $this->input->post('rt'),
                'rw' => $this->input->post('rw'),
                'kecamatan' => $this->input->post('kecamatan'),
                'kelurahan' => $this->input->post('kelurahan'),
                'kode_pos' => $this->input->post('kode_pos'),
                'telepon' => $this->input->post('telepon'),
                'hp' => $this->input->post('hp'),
                'email' => $this->input->post('email'),
                'status' => $this->input->post('status'),
                'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                'nisn' => $this->input->post('nisn'),
                'nama_sekolah' => $this->input->post('nama_sekolah'),
                'jurusan' => $this->input->post('jurusan'),
                'no_ijazah' => $this->input->post('no_ijazah'),
                'tempat_ijazah' => $this->input->post('tempat_ijazah'),
                'tgl_ijazah' => $this->input->post('tgl_ijazah'),
                'nama_ayah' => $this->input->post('nama_ayah'),
                'nik_ayah' => $this->input->post('nik_ayah'),
                'hubungan_ayah' => $this->input->post('hubungan_ayah'),
                'tpt_lahir_ayah' => $this->input->post('tpt_lahir_ayah'),
                'tgl_lahir_ayah' => $this->input->post('tgl_lahir_ayah'),
                'status_ayah' => $this->input->post('status_ayah'),
                'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
                'no_hp_ayah' => $this->input->post('no_hp_ayah'),
                'telepon_ayah' => $this->input->post('telepon_ayah'),
                'alamat_rumah_ayah' => $this->input->post('alamat_rumah_ayah'),
                'alamat_kantor_ayah' => $this->input->post('alamat_kantor_ayah'),
                'nama_ibu' => $this->input->post('nama_ibu'),
                'nik_ibu' => $this->input->post('nik_ibu'),
                'hubungan_ibu' => $this->input->post('hubungan_ibu'),
                'tempat_lahir_ibu' => $this->input->post('tempat_lahir_ibu'),
                'tgl_lahir_ibu' => $this->input->post('tgl_lahir_ibu'),
                'status_ibu' => $this->input->post('status_ibu'),
                'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
                'no_hp_ibu' => $this->input->post('no_hp_ibu'),
                'telepon_ibu' => $this->input->post('telepon_ibu'),
                'alamat_rumah_ibu' => $this->input->post('alamat_rumah_ibu'),
                'alamat_kantor_ibu' => $this->input->post('alamat_kantor_ibu'),
                'kelas' => $this->input->post('kelas'),
                'ijazah' => $this->input->post('ijazah'),
                'foto' => $this->input->post('foto'),
                'transkrip_nilai' => $this->input->post('transkrip_nilai'),
                'kk' => $this->input->post('kk'),
                'k_kip' => $this->input->post('k_kip'),
                'id_prodi_1' => $this->input->post('id_prodi_1'),
                'id_prodi_2' => $this->input->post('id_prodi_2'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'level' => $this->input->post('level'),
            );
 
         $this->db->insert('tb_registrasi', $data);


         $data1= array(
            'username' => $this->input->post('username'),
            'password' =>md5($this->input->post('password')),
            'level' => $this->input->post('level'));
            $this->db->insert('tb_login',$data1);
         redirect('registrasi');
         } 
        } 
         else {
             $this->load->model('model_prodi');
             $data['rec_prodi'] = $this->model_prodi->tampilkan_data();
             $this->load->view('registrasi/form_input', $data);
        }
 }
 */

    function edit()
    {
        if (isset($_POST['submit'])) {
            $key = $this->input->post('id');
            $data = array(
                'namaLengkap' => $this->input->post('namaLengkap'),
                'nik' => $this->input->post('nik'),
                'suku' => $this->input->post('suku'),
                'tpt_lahir' => $this->input->post('tpt_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'agama' => $this->input->post('agama'),
                'tinggi' => $this->input->post('tinggi'),
                'jalan' => $this->input->post('jalan'),
                'dusun' => $this->input->post('dusun'),
                'rt' => $this->input->post('rt'),
                'rw' => $this->input->post('rw'),
                'kecamatan' => $this->input->post('kecamatan'),
                'kelurahan' => $this->input->post('kelurahan'),
                'kode_pos' => $this->input->post('kode_pos'),
                'telepon' => $this->input->post('telepon'),
                'hp' => $this->input->post('hp'),
                'email' => $this->input->post('email'),
                'status' => $this->input->post('status'),
                'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                'nisn' => $this->input->post('nisn'),
                'nama_sekolah' => $this->input->post('nama_sekolah'),
                'jurusan' => $this->input->post('jurusan'),
                'no_ijazah' => $this->input->post('no_ijazah'),
                'tempat_ijazah' => $this->input->post('tempat_ijazah'),
                'tgl_ijazah' => $this->input->post('tgl_ijazah'),
                'nama_ayah' => $this->input->post('nama_ayah'),
                'nik_ayah' => $this->input->post('nik_ayah'),
                'hubungan_ayah' => $this->input->post('hubungan_ayah'),
                'tpt_lahir_ayah' => $this->input->post('tpt_lahir_ayah'),
                'tgl_lahir_ayah' => $this->input->post('tgl_lahir_ayah'),
                'status_ayah' => $this->input->post('status_ayah'),
                'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
                'no_hp_ayah' => $this->input->post('no_hp_ayah'),
                'telepon_ayah' => $this->input->post('telepon_ayah'),
                'alamat_rumah_ayah' => $this->input->post('alamat_rumah_ayah'),
                'alamat_kantor_ayah' => $this->input->post('alamat_kantor_ayah'),
                'nama_ibu' => $this->input->post('nama_ibu'),
                'nik_ibu' => $this->input->post('nik_ibu'),
                'hubungan_ibu' => $this->input->post('hubungan_ibu'),
                'tempat_lahir_ibu' => $this->input->post('tempat_lahir_ibu'),
                'tgl_lahir_ibu' => $this->input->post('tgl_lahir_ibu'),
                'status_ibu' => $this->input->post('status_ibu'),
                'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
                'no_hp_ibu' => $this->input->post('no_hp_ibu'),
                'telepon_ibu' => $this->input->post('telepon_ibu'),
                'alamat_rumah_ibu' => $this->input->post('alamat_rumah_ibu'),
                'alamat_kantor_ibu' => $this->input->post('alamat_kantor_ibu'),

                'kelas' => $this->input->post('kelas'),
                'ijazah' => $this->input->post('ijazah'),
                'foto' => $this->input->post('foto'),
                'transkrip_nilai' => $this->input->post('transkrip_nilai'),
                'kk' => $this->input->post('kk'),
                'k_kip' => $this->input->post('k_kip'),
                'id_prodi_1' => $this->input->post('id_prodi_1'),
                'id_prodi_2' => $this->input->post('id_prodi_2'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'level' => $this->input->post('level'),

            );
            $this->db->where('id_registrasi', $key);
            $this->db->update('tb_registrasi', $data);
            redirect('registrasi');
        } else {
            $id = $this->uri->segment(3);
            $data['rec_prodi'] = $this->model_prodi->tampilkan_data();
            $data['rec_registrasi'] = $this->model_registrasi->get_one($id)->row_array();
            $this->load->view('registrasi/form_edit', $data);
        }
    }

    function delete($id)
    {
        $id = $this->uri->segment(3);
        $this->db->where('id_registrasi', $id);
        $this->db->delete('tb_registrasi');
        redirect('registrasi');
    }
}
