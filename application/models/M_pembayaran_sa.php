<?php
class M_pembayaran_sa extends CI_Model{
    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tbl_pembayaran_sa');
        $this->db->order_by('id_pembayaran_sa','desc');
        return $this->db->get()->result();
    }
    function tbayar_sa($data){
        $this->db->insert('tbl_pembayaran_sa', $data);
        }
    
    public function detail($id_pembayaran_sa)
    {
        $this->db->select('*');
        $this->db->from('tbl_pembayaran_sa');
        $this->db->join('tbl_pembayaran_sa','tbl_pembayaran_sa.id_pendaftaran_sa = tbl_pendaftaran_sa.id_pendaftaran_sa','left');
        $this->db->where('id_pembayaran_sa',$id_pembayaran_sa);
        return $this->db->get()->row();
    }

}