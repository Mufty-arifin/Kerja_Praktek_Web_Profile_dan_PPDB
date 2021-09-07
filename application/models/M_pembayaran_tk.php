<?php
class M_pembayaran_tk extends CI_Model{
    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tbl_pembayaran_tk');
        $this->db->order_by('id_pembayaran_tk','desc');
        return $this->db->get()->result();
    }


    function tbayar_tk($data){
        $this->db->insert('tbl_pembayaran_tk', $data);
        }
    public function id_pemtk()
        {
            $this->db->select('RIGHT(pembayaran_tk.id_pembayaran_tk,3) as kode', FALSE);
            $this->db->where('nik');
            $this->db->order_by('id_pembayaran_tk','DESC');
            $this->db->limit(1);
            $query = $this->db->get('pembayaran_tk');
            //cek dulu apakah ada sudah ada kode di tabel.
            if($query->num_rows() <> 0){
            //jika kode ternyata sudah ada.
            $data = $query->row();
            $kode = intval($data->kode) + 1;
            }else{
            //jika kode belum ada
            $kode = 1;
            }
            $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
            $kodejadi = "PN".$kodemax;
            return $kodejadi;
        }
   
}