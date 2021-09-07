<?php
class M_pengumuman extends CI_Model{
    public function lists()
    {
        $this->db->select('*');
        $this->db->join('tbl_login', 'tbl_login.id_user = tbl_pengumuman.id_user', 'left');
        $this->db->from('tbl_pengumuman');
        $this->db->order_by('id_pengumuman','desc');
        return $this->db->get()->result();
    }
 
    public function detail($id_pengumuman)
    {
     $this->db->select('*');
     $this->db->from('tbl_pengumuman');
     $this->db->where('id_pengumuman',$id_pengumuman);
     return $this->db->get()->row();
    }
    
    public function tambah($data)
    {
     $this->db->insert('tbl_pengumuman', $data);
    }
 
    public function edit($data)
    {
     $this->db->where('id_pengumuman',$data['id_pengumuman']);
     $this->db->update('tbl_pengumuman',$data);
    }
 
    public function hapus($data)
    {
     $this->db->where('id_pengumuman',$data['id_pengumuman']);
     $this->db->delete('tbl_pengumuman',$data);
     
    }
}