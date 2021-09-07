<?php
class M_guru extends CI_Model{
   public function lists()
   {
       $this->db->select('*');
       $this->db->join('tbl_login', 'tbl_login.id_user = tbl_guru.id_user', 'left');
       $this->db->from('tbl_guru');
       $this->db->order_by('id_guru','desc');
       return $this->db->get()->result();
   }

   public function detail($id_guru)
   {
    $this->db->select('*');
    $this->db->from('tbl_guru');
    $this->db->where('id_guru',$id_guru);
    return $this->db->get()->row();
   }
   
   public function tambah($data)
   {
    $this->db->insert('tbl_guru', $data);
   }

   public function edit($data)
   {
    $this->db->where('id_guru',$data['id_guru']);
    $this->db->update('tbl_guru',$data);
   }

   public function delete($data)
   {
    $this->db->where('id_guru',$data['id_guru']);
    $this->db->delete('tbl_guru',$data);
    
   }

}
