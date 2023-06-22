<?php
class global_model extends CI_Model{
    

function login($username, $password) {
    $check = $this->db->get_where('tb_login', array('username'=>$username, 'password'=>md5($password)));
    if ($check->num_rows()>0){
        return 1;
    } else {
        return 0;
    }
}
    
 function tampilkan_data()
 {
    return $this->db->get('tb_login');
 }
 
 function tambah(){
    $data=array(
       'username'=>$this->input->post('username'),
       'password'=>$this->input->post('password'));
    $this->db->insert('tb_auth', $data);
    }
   
    function edit(){
        $id= $this->input->post('id_auth');
        $data=array(
            'username'=>$this->input->post('username'),
            'password'=>$this->input->post('password'));
            
        $this->db->where('id_auth',$id);
        $this->db->update('tb_auth', $data);
    }
       
    function get_one($id){
        $indeks= array('id_auth'=>$id);
      return $this->db->get_where('tb_auth',$indeks);
    }

    function delete($id){
        $this->db->where('id_auth',$id);
        $this->db->delete('tb_auth');
    }
        
}