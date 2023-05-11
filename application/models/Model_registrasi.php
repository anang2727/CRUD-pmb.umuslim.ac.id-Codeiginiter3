<?php
class model_registrasi extends CI_Model{

function tampilkan_data(){
    return $this->db->get('tb_registrasi');
}

function tambah(){
    $data=array(
    'namaLengkap'=>$this->input->post('namaLengkap'),
    'nik'=>$this->input->post('nik'),
    'suku'=>$this->input->post('suku'),
    'tpt_lahir'=>$this->input->post('tpt_lahir'),
    'tgl_lahir'=>$this->input->post('tgl_lahir'),
    'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
    'agama'=>$this->input->post('agama'),
    'tinggi'=>$this->input->post('tinggi'),
    'jalan'=>$this->input->post('jalan'),
    'dusun'=>$this->input->post('dusun'),
    'rt'=>$this->input->post('rt'),
    'rw'=>$this->input->post('rw'),
    'kecamatan'=>$this->input->post('kecamatan'),
    'kelurahan'=>$this->input->post('kelurahan'),
    'kode_pos'=>$this->input->post('kode_pos'),
    'telepon'=>$this->input->post('telepon'),
    'hp'=>$this->input->post('hp'),
    'email'=>$this->input->post('email'),
    'status'=>$this->input->post('status'),
    'pendidikan_terakhir'=>$this->input->post('pendidikan_terakhir'),
    'nisn'=>$this->input->post('nisn'),
    'nama_sekolah'=>$this->input->post('nama_sekolah'),
    'jurusan'=>$this->input->post('jurusan'),
    'no_ijazah'=>$this->input->post('no_ijazah'),
    'tempat_ijazah'=>$this->input->post('tempat_ijazah'),
    'tgl_ijazah'=>$this->input->post('tgl_ijazah'),
    'nama_ayah'=>$this->input->post('nama_ayah'),
    'nik_ayah'=>$this->input->post('nik_ayah'),
    'hubungan_ayah'=>$this->input->post('hubungan_ayah'),
    'tpt_lahir_ayah'=>$this->input->post('tpt_lahir_ayah'),
    'tgl_lahir_ayah'=>$this->input->post('tgl_lahir_ayah'),
    'status_ayah'=>$this->input->post('status_ayah'),
    'pekerjaan_ayah'=>$this->input->post('pekerjaan_ayah'),
    'no_hp_ayah'=>$this->input->post('no_hp_ayah'),
    'telepon_ayah'=>$this->input->post('telepon_ayah'),
    'alamat_rumah_ayah'=>$this->input->post('alamat_rumah_ayah'),
    'alamat_kantor_ayah'=>$this->input->post('alamat_kantor_ayah'),
    'nama_ibu'=>$this->input->post('nama_ibu'),
    'nik_ibu'=>$this->input->post('nik_ibu'),
    'hubungan_ibu'=>$this->input->post('hubungan_ibu'),
    'tpt_lahir_ibu'=>$this->input->post('tpt_lahir_ibu'),
    'tgl_lahir_ibu'=>$this->input->post('tgl_lahir_ibu'),
    'status_ibu'=>$this->input->post('status_ibu'),
    'pekerjaan_ibu'=>$this->input->post('pekerjaan_ibu'),
    'no_hp_ibu'=>$this->input->post('no_hp_ibu'),
    'telepon_ibu'=>$this->input->post('telepon_ibu'),
    'alamat_rumah_ibu'=>$this->input->post('alamat_rumah_ibu'),
    'alamat_kantor_ibu'=>$this->input->post('alamat_kantor_ibu'),
    'prodi1'=>$this->input->post('prodi1'),
    'prodi2'=>$this->input->post('prodi2'),
    'kelas'=>$this->input->post('kelas'),
    'ijazah'=>$this->input->post('ijazah'),
    'foto'=>$this->input->post('foto'),
    'trankrip_nilai'=>$this->input->post('transkrip_nilai'),
    'kk'=>$this->input->post('kk'),
    'k_kip'=>$this->input->post('k_kip'),
    
);
    $this->db->insert('tb_registrasi',$data);
}

function edit(){
    $id= $this->input->post('id_registrasi');
    $data=array(
        'namaLengkap'=>$this->input->post('namaLengkap'),
        'nik'=>$this->input->post('nik'),
        'suku'=>$this->input->post('suku'),
        'tpt_lahir'=>$this->input->post('tpt_lahir'),
        'tgl_lahir'=>$this->input->post('tgl_lahir'),
        'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
        'agama'=>$this->input->post('agama'),
        'tinggi'=>$this->input->post('tinggi'),
        'jalan'=>$this->input->post('jalan'),
        'dusun'=>$this->input->post('dusun'),
        'rt'=>$this->input->post('rt'),
        'rw'=>$this->input->post('rw'),
        'kecamatan'=>$this->input->post('kecamatan'),
        'kelurahan'=>$this->input->post('kelurahan'),
        'kode_pos'=>$this->input->post('kode_pos'),
        'telepon'=>$this->input->post('telepon'),
        'hp'=>$this->input->post('hp'),
        'email'=>$this->input->post('email'),
        'status'=>$this->input->post('status'),
        'pendidikan_terakhir'=>$this->input->post('pendidikan_terakhir'),
        'nisn'=>$this->input->post('nisn'),
        'nama_sekolah'=>$this->input->post('nama_sekolah'),
        'jurusan'=>$this->input->post('jurusan'),
        'no_ijazah'=>$this->input->post('no_ijazah'),
        'tempat_ijazah'=>$this->input->post('tempat_ijazah'),
        'tgl_ijazah'=>$this->input->post('tgl_ijazah'),
        'nama_ayah'=>$this->input->post('nama_ayah'),
        'nik_ayah'=>$this->input->post('nik_ayah'),
        'hubungan_ayah'=>$this->input->post('hubungan_ayah'),
        'tpt_lahir_ayah'=>$this->input->post('tpt_lahir_ayah'),
        'tgl_lahir_ayah'=>$this->input->post('tgl_lahir_ayah'),
        'status_ayah'=>$this->input->post('status_ayah'),
        'pekerjaan_ayah'=>$this->input->post('pekerjaan_ayah'),
        'no_hp_ayah'=>$this->input->post('no_hp_ayah'),
        'telepon_ayah'=>$this->input->post('telepon_ayah'),
        'alamat_rumah_ayah'=>$this->input->post('alamat_rumah_ayah'),
        'alamat_kantor_ayah'=>$this->input->post('alamat_kantor_ayah'),
        'nama_ibu'=>$this->input->post('nama_ibu'),
        'nik_ibu'=>$this->input->post('nik_ibu'),
        'hubungan_ibu'=>$this->input->post('hubungan_ibu'),
        'tpt_lahir_ibu'=>$this->input->post('tpt_lahir_ibu'),
        'tgl_lahir_ibu'=>$this->input->post('tgl_lahir_ibu'),
        'status_ibu'=>$this->input->post('status_ibu'),
        'pekerjaan_ibu'=>$this->input->post('pekerjaan_ibu'),
        'no_hp_ibu'=>$this->input->post('no_hp_ibu'),
        'telepon_ibu'=>$this->input->post('telepon_ibu'),
        'alamat_rumah_ibu'=>$this->input->post('alamat_rumah_ibu'),
        'alamat_kantor_ibu'=>$this->input->post('alamat_kantor_ibu'),
        'prodi1'=>$this->input->post('prodi1'),
        'prodi2'=>$this->input->post('prodi2'),
        'kelas'=>$this->input->post('kelas'),
        'ijazah'=>$this->input->post('ijazah'),
        'foto'=>$this->input->post('foto'),
        'trankrip_nilai'=>$this->input->post('transkrip_nilai'),
        'kk'=>$this->input->post('kk'),
        'k_kip'=>$this->input->post('k_kip'),
    );
    $this->db->where('id_registrasi',$id);
    $this->db->update('tb_registrasi',$data);   
}

function get_one($id){
    $indeks= array('id_registrasi'=>$id);
    return $this->db->get_where('tb_registrasi',$indeks);
}

function delete($id){
    $this->db->where('id_registrasi',$id);
    $this->db->delete('tb_registrasi');
}

}