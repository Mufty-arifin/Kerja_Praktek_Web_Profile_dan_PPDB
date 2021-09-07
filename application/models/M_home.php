<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_home extends CI_Model{

    //guru
   
    public function guru()
    {
        $this->db->select('*');
        $this->db->from('tbl_guru');
        $this->db->order_by('id_guru','desc');
        return $this->db->get()->result();
    }
    public function home_guru()
    {
        $this->db->select('*');
        $this->db->from('tbl_guru');
        $this->db->order_by('id_guru','desc');
        $this->db->limit(4);
        return $this->db->get()->result();
    }
   

   //berita
   //memunculkan berita dngn paging
   public function berita($limit,$start)
   {
       $this->db->select('*');
       $this->db->from('tbl_berita');
       $this->db->join('tbl_login', 'tbl_login.id_user = tbl_berita.id_user', 'left');
       $this->db->order_by('id_berita','desc');
       $this->db->limit($limit,$start);
       return $this->db->get()->result();
   }

   public function total_berita()
   {
       $this->db->select('*');
       $this->db->from('tbl_berita');
       $this->db->join('tbl_login', 'tbl_login.id_user = tbl_berita.id_user', 'left');
       $this->db->order_by('id_berita','desc');
       return $this->db->get()->result();
   }

   public function detail_berita($slug_berita)
   {
       $this->db->select('*');
       $this->db->from('tbl_berita');
       $this->db->join('tbl_login', 'tbl_login.id_user = tbl_berita.id_user', 'left');
       $this->db->where('slug_berita',$slug_berita);
       return $this->db->get()->row();
   }

   public function latest_berita()
   {
       $this->db->select('*');
       $this->db->from('tbl_berita');
       $this->db->join('tbl_login', 'tbl_login.id_user = tbl_berita.id_user', 'left');
       $this->db->order_by('id_berita','desc');
       $this->db->limit(10);
       return $this->db->get()->result();
   }
   public function home_berita()
   {
       $this->db->select('*');
       $this->db->from('tbl_berita');
       $this->db->join('tbl_login', 'tbl_login.id_user = tbl_berita.id_user', 'left');
       $this->db->order_by('id_berita','desc');
       $this->db->limit(3);
       return $this->db->get()->result();
   }

  

   //kegiatan
     //memunculkan kegiatan dngn paging
     public function kegiatan($limit,$start)
     {
         $this->db->select('*');
         $this->db->from('tbl_kegiatan');
         $this->db->join('tbl_login', 'tbl_login.id_user = tbl_kegiatan.id_user', 'left');
         $this->db->order_by('id_kegiatan','desc');
         $this->db->limit($limit,$start);
         return $this->db->get()->result();
     }
  
     public function total_kegiatan()
     {
         $this->db->select('*');
         $this->db->from('tbl_kegiatan');
         $this->db->join('tbl_login', 'tbl_login.id_user = tbl_kegiatan.id_user', 'left');
         $this->db->order_by('id_kegiatan','desc');
         return $this->db->get()->result();
     }
  
     public function detail_kegiatan($slug_kegiatan)
     {
         $this->db->select('*');
         $this->db->from('tbl_kegiatan');
         $this->db->join('tbl_login', 'tbl_login.id_user = tbl_kegiatan.id_user', 'left');
         $this->db->where('slug_kegiatan',$slug_kegiatan);
         return $this->db->get()->row();
     }
  
     public function latest_kegiatan()
     {
         $this->db->select('*');
         $this->db->from('tbl_kegiatan');
         $this->db->join('tbl_login', 'tbl_login.id_user = tbl_kegiatan.id_user', 'left');
         $this->db->order_by('id_kegiatan','desc');
         $this->db->limit(10);
         return $this->db->get()->result();
     }

   public function home_kegiatan()
   {
       $this->db->select('*');
       $this->db->from('tbl_kegiatan');
       $this->db->join('tbl_login', 'tbl_login.id_user = tbl_kegiatan.id_user', 'left');
       $this->db->order_by('id_kegiatan','desc');
       $this->db->limit(3);
       return $this->db->get()->result();
   }

   //pengumuman
   public function pengumuman()
   {
       $this->db->select('*');
       $this->db->from('tbl_pengumuman');
       $this->db->join('tbl_login', 'tbl_login.id_user = tbl_pengumuman.id_user', 'left');
       $this->db->order_by('id_pengumuman','desc');
       $this->db->limit(4);
       return $this->db->get()->result();
   }
   public function mberita()
   {
       $this->db->select('*');
       $this->db->from('tbl_berita');
       $this->db->order_by('id_berita','desc');
       $this->db->limit(4);
       return $this->db->get()->result();
   }

   public function jumlahdaftartk()
   {
       $query = $this->db->get('tbl_pendaftaran_tk');
       if ($query->num_rows()>0) 
       {
           return $query->num_rows();
       }
       else{
           return 0;
       }
   }

   public function jumlahdaftarsa()
   {
       $query = $this->db->get('tbl_pendaftaran_sa');
       if ($query->num_rows()>0) 
       {
           return $query->num_rows();
       }
       else{
           return 0;
       }
   }

   
}