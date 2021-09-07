<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_akun extends CI_Model{

    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tbl_login');
        $this->db->order_by('id_user','desc');
        return $this->db->get()->result();
    }
    public function detail($id_user)
    {
     $this->db->select('*');
     $this->db->from('tbl_login');
     $this->db->where('id_user',$id_user);
     return $this->db->get()->row();
    }
    
    public function tambah($data)
    {
     $this->db->insert('tbl_login', $data);
    }
 
    public function edit($data)
    {
     $this->db->where('id_user',$data['id_user']);
     $this->db->update('tbl_login',$data);
    }
    public function hapus($data)
    {
     $this->db->where('id_user',$data['id_user']);
     $this->db->delete('tbl_login',$data);
     
    }
}