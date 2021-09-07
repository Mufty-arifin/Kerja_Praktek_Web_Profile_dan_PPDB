<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_kegiatan extends CI_Model{

   public function lists()
   {
       $this->db->select('*');
       $this->db->from('tbl_kegiatan');
       $this->db->join('tbl_login', 'tbl_login.id_user = tbl_kegiatan.id_user', 'left');
       $this->db->order_by('id_kegiatan','desc');
       return $this->db->get()->result();
   }

   public function detail($id_kegiatan)
   {
       $this->db->select('*');
       $this->db->from('tbl_kegiatan');
       $this->db->where('id_kegiatan',$id_kegiatan);
       return $this->db->get()->row();
   }

   public function tambah($data)
   {
       $this->db->insert('tbl_kegiatan',$data);
   }

   public function edit($data)
   {
    $this->db->where('id_kegiatan',$data['id_kegiatan']);
    $this->db->update('tbl_kegiatan',$data);
   }

   public function hapus($data)
   {
    $this->db->where('id_kegiatan',$data['id_kegiatan']);
    $this->db->delete('tbl_kegiatan',$data);
    
   }
}