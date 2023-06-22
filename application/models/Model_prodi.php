<?php
class model_prodi extends CI_Model
{

    function tampilkan_data()
    {
        return $this->db->get('tb_prodi');
    }

    function tambah()
    {
        $data = array(
            'nama_prodi' => $this->input->post('nama_prodi'));
        $this->db->insert('tb_prodi', $data);
    }

    function edit()
    {
        $id = $this->input->post('id_prodi');
        $data = array('nama_prodi' => $this->input->post('nama_prodi'));
        $this->db->where('id_prodi', $id);
        $this->db->update('tb_prodi', $data);
    }

    function get_one($id)
    {
        $indeks =  array('id_prodi' => $id);
        return $this->db->get_where('tb_prodi', $indeks);
    }

    function delete($id)
    {
        $this->db->where('id_prodi', $id);
        $this->db->delete('tb_prodi');
    }
    // function tampilkan_data_paging($halaman, $batas)
    // {
    //     return $this->db->query("select * from tb_prodi limit $halaman,$batas");
    // }
    // function cari()
    // {
    //     $keyword=$this->input->post('keyword',true);
    //     $this->db->like('nama_prodi','$keyword');
    //     return $this->db->get('tb_prodi')->result_array();
    // }
}