<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
    }
    public function index()
    {
        $data = array(
                    'title'=>'Web YPD Nurul Wathan',
                    'berita'=> $this->m_home->home_berita(),
                    'guru'=> $this->m_home->home_guru(),
                    'kegiatan'=> $this->m_home->home_kegiatan(),
                    'pengumuman'=> $this->m_home->pengumuman(),
                    'isi'  =>'v_home'
                );
        $this->load->view('layout/v_wrapperhome',$data,FALSE);
    }
    public function visimisi()
    {
        $data = array(
                    'title'=>'Visi Misi',
                    'isi'  =>'v_visimisi'
                );
        $this->load->view('layout/v_wrapper',$data,FALSE);
    }
    public function guru()
    {
        
        $data = array(
            'title' => 'Guru',
            'guru'  => $this->m_home->guru(),
            'isi'   =>'v_guru'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);
    }
    
    public function berita()
    {
        $this->load->library('pagination');
        $config['base_url'] = base_url('home/berita');
        $config['total_rows'] = count($this->m_home->total_berita());
        $config['per_page'] = 6;
        $config['uri_segment'] = 3;
        // start dan limit
        $limit= $config['per_page'];
        $start= ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;

        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';
        $config['full_tag_open'] = '<div class="pagination_container d-flex flex-row align-items-center justify-content-start text-center"><ul class="pagination_list">';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';   
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>'; 
        $config['full_tag_close'] = '</ul></div>';

        $this->pagination->initialize($config);
        

        $data = array(
            'paginasi'      => $this->pagination->create_links(),
            'latest_berita' => $this->m_home->latest_berita(),
            'berita'        => $this->m_home->berita($limit,$start),
            'title'         => 'Berita',
            'isi'           =>'v_berita'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);
    }

    public function detail_berita($slug_berita)
    {
        $data = array(
            'title' => 'Detail Berita',
            'latest_berita' => $this->m_home->latest_berita(),
            'berita'  => $this->m_home->detail_berita($slug_berita),
            'isi'   =>'v_detail_berita'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);
    }

    //kegiatan
    public function kegiatan()
    {
        $this->load->library('pagination');
        $config['base_url'] = base_url('home/kegiatan');
        $config['total_rows'] = count($this->m_home->total_kegiatan());
        $config['per_page'] = 6;
        $config['uri_segment'] = 3;
        // start dan limit
        $limit= $config['per_page'];
        $start= ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;

        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';
        $config['full_tag_open'] = '<div class="pagination_container d-flex flex-row align-items-center justify-content-start text-center"><ul class="pagination_list">';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';   
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>'; 
        $config['full_tag_close'] = '</ul></div>';

        $this->pagination->initialize($config);
        

        $data = array(
            'paginasi'      => $this->pagination->create_links(),
            'latest_kegiatan' => $this->m_home->latest_kegiatan(),
            'kegiatan'        => $this->m_home->kegiatan($limit,$start),
            'title'         => 'Kegiatan',
            'isi'           =>'v_kegiatan'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);
    }

    public function detail_kegiatan($slug_kegiatan)
    {
        $data = array(
            'title' => 'Detail Kegiatan',
            'latest_kegiatan' => $this->m_home->latest_kegiatan(),
            'kegiatan'  => $this->m_home->detail_kegiatan($slug_kegiatan),
            'isi'   =>'v_detail_kegiatan'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);
    }

    //pengumuman
    public function pengumuman()
    {
        $data = array(
            'title' => 'pengumuman',
            'pengumuman'  => $this->m_home->pengumuman(),
            'isi'   =>'v_pengumuman'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);
    }
    
    public function pendaftaran_sa()
    {
        $data = array(
            'title'=>'Pendaftaran Sekolah Agama',
            'isi'  =>'v_pendaftaran_sa'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);
    
    }
    public function pendaftaran_tk()
    {
        $data = array(
            'title'=>'Pendaftaran TK',
            'isi'  =>'v_pendaftaran_tk'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);
    
    }
}