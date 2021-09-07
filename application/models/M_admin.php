<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_admin extends CI_Model{

    public function pengumuman()
    {
        $this->db->select('*');
        $this->db->from('tbl_pengumuman');
        $this->db->order_by('id_pengumuman','desc');
        return $this->db->get()->result();
    }

   
}