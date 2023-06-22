<!-- // class model_registrasi extends CI_Model
// {
//   function getDataregistrasi()
//   {
//     $query= "SELECT * FROM tb_registrasi as tp, tb_prodi as tm
//         WHERE tm.id_prodi = tp.id_prodi";
//         return $this->db->query($query);
//   }
//   function get_one($id)
//   {
//     $indeks =   array('id_registrasi' => $id);
//     return $this->db->get_where('tb_registrasi', $indeks);
//   }
// } -->

<?php
class model_registrasi extends CI_Model {
    
    function getDataRegistrasi() {
        $query= "SELECT  tr.namaLengkap, 
                   (SELECT tp.nama_prodi FROM tb_prodi tp WHERE tr.id_prodi_1 = tp.id_prodi), 
                   (SELECT tp.nama_prodi FROM tb_prodi tp WHERE tr.id_prodi_2 = tp.id_prodi)
                 FROM tb_registrasi as tr";
       return $this->db->query($query);
    }


     function get_one($id) {
        $indeks= array('id_registrasi'=>$id);
        return $this->db->get_where('tb_registrasi',$indeks);
    }


    function tambah()
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
    }
}