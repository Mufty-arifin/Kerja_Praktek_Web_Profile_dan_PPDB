<?php
class M_pendaftaran_tk extends CI_Model{

    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tbl_pendaftaran_tk');
        $this->db->order_by('id_pendaftaran_tk','desc');
        return $this->db->get()->result();
    } 
    function simpandaftartk($data)
    {
        $this->db->insert('tbl_pendaftaran_tk', $data);
    }

    public function tampil_data_tk()
    {
        return $this->db->get('tbl_pendaftaran_tk');
    }

}