<?php
class M_laporan_sa extends CI_Model{
    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tbl_pembayaran_sa');
        $this->db->order_by('id_pembayaran_sa','desc');
        return $this->db->get()->result();
    }
    public function laporansa($tglawal,$tglakhir){
        $this->db->select('*');
        $this->db->from('tbl_pembayaran');
        $this->db->where('tgl_pembayaran');
        $this->db->between($tglawal);
        $this->db->and($tglakhir);
        $this->db->order_by('id_pembayaran_sa', 'desc');
        $query = $this->db->get();
        return $query;
  }
  public function get(){
    $this->db->select('tbl_pembayaran_sa.id_pembayaran_sa,tbl_pembayaran_sa.nik,tbl_pembayaran_sa.nama,tbl_pembayaran_sa.total_bayar,tbl_pembayaran_sa.tgl_pembayaran,tbl_pembayaran_sa.status_bayar');
    $this->db->from('tbl_pembayaran_sa');
    
    $this->db->order_by('id_pembayaran_sa', 'desc');
    $query = $this->db->get();
    return $query;
}
public function filter($dari, $sampai){
    $query = $this->db->query("SELECT tbl_pembayaran_sa.id_pembayaran_sa,tbl_pembayaran_sa.nik,tbl_pembayaran_sa.nama,tbl_pembayaran_sa.total_bayar,tbl_pembayaran_sa.tgl_pembayaran,tbl_pembayaran_sa.status_bayar
        FROM tbl_pembayaran_sa
        
        between '$dari' and '$sampai')as b");
    return $query->result_array();
}
}