<?php
class M_pendaftaran_sa extends CI_Model{

    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tbl_pendaftaran_sa');
        $this->db->order_by('id_pendaftaran_sa','desc');
        return $this->db->get()->result();
    } 
    function simpandaftarsa($data)
    {
        $this->db->insert('tbl_pendaftaran_sa', $data);
    }

    public function tampil_data_sa()
    {
        return $this->db->get('tbl_pendaftaran_sa');
    }

    
}