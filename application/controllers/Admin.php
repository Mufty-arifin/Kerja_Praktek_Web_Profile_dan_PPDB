<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
    }
    public function index()
    {
        $data = array(
                    'title'=>'YPD Nurul Wathan',
                    'title2'=>'Beranda',
                    'pengumuman'  => $this->m_home->pengumuman(),
                    'berita'  => $this->m_home->mberita(),
                    'total_daftartk' => $this->m_home->jumlahdaftartk(),
                    'total_daftarsa' => $this->m_home->jumlahdaftarsa(),
                    'isi'  =>'admin/v_home'
                );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function pengumuman()
    {
        $data = array(
            
            'pengumuman'  => $this->m_home->pengumuman()
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }
   
    public function mberita()
    {
        $data = array(
            
            'berita'  => $this->m_home->mberita()
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }
   
    function jumlahdaftartk()
    {
        $data = array(
            
            'total_daftartk' => $this->m_home->jumlahdaftartk()
        );
       
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    
    function jumlahdaftarsa()
    {
        $data = array(
            
            'total_daftarsa' => $this->m_home->jumlahdaftarsa()
        );
       
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }
}