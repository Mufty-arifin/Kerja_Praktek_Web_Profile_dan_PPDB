<?php
class M_detaildaftarsa extends CI_Model{

    public function detaildaftarsa()
    {
        $this->db->select('nik');
        $this->db->get('tbl_pendaftaran_tk');
    }
}