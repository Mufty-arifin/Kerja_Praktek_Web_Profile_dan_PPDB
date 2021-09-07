<?php
class M_laporan_tk extends CI_Model{
    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tbl_pembayaran_tk');
        $this->db->order_by('id_pembayaran_tk','desc');
        return $this->db->get()->result();
    }
   
    public function laporantk($tglawal,$tglakhir){
        $this->db->select('*');
        $this->db->from('tbl_pembayaran');
        $this->db->where('tgl_pembayaran');
        $this->db->between($tglawal);
        $this->db->and($tglakhir);
        $this->db->order_by('id_pembayaran_tk', 'desc');
        $query = $this->db->get();
        return $query;
  }
  public function get(){
    $this->db->select('tbl_pembayaran_tk.id_pembayaran_tk,tbl_pembayaran_tk.nik,tbl_pembayaran_tk.nama,tbl_pembayaran_tk.total_bayar,tbl_pembayaran_tk.tgl_pembayaran,tbl_pembayaran_tk.status_bayar');
    $this->db->from('tbl_pembayaran_tk');
    
    $this->db->order_by('id_pembayaran_tk', 'desc');
    $query = $this->db->get();
    return $query;
}
public function filter($dari, $sampai){
    $query = $this->db->query("SELECT tbl_pembayaran_tk.id_pembayaran_tk,tbl_pembayaran_tk.nik,tbl_pembayaran_tk.nama,tbl_pembayaran_tk.total_bayar,tbl_pembayaran_tk.tgl_pembayaran,tbl_pembayaran_tk.status_bayar
        FROM tbl_pembayaran_tk
        
        between '$dari' and '$sampai')as b");
    return $query->result_array();
}
}