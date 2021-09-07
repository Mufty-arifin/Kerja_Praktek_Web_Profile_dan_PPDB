<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pengumuman');
    }

    public function index()
    {
        $data = array(
            'title'=>'YPD Nurul Wathan',
            'title2'=>'Kelola Pengumuman',
            'pengumuman'=>$this->m_pengumuman->lists(),
            'isi'  =>'admin/v_pengumuman'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }
    public function tambah()
    {
        $this->form_validation->set_rules('judul_pengumuman','Judul Pengumuman','required');
        $this->form_validation->set_rules('isi_pengumuman','Isi Penguman','required');
        if ($this->form_validation->run() == FALSE){
            $data = array(
                'title'=>'YPD Nurul Wathan',
                'title2'=>'tambah Pengumuman',
                'isi'  =>'admin/pengumuman/v_tambah'
            );
            $this->load->view('admin/layout/v_wrapper',$data,FALSE);
        }else{
        $data = array(
           'judul_pengumuman'   =>$this->input->post('judul_pengumuman'),
           'isi_pengumuman'     =>$this->input->post('isi_pengumuman'),
           'tgl_pengumuman'     =>date('Y-m-d'),
           'id_user'           => $this->session->userdata('id_user')
        );
        $this->m_pengumuman->tambah($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil di Tambahkan');
        redirect('pengumuman');
            }
    }

    public function edit($id_pengumuman)
    {
        $this->form_validation->set_rules('judul_pengumuman','Judul Pengumuman','required');
        $this->form_validation->set_rules('isi_pengumuman','Isi Pengumuman','required');
        if ($this->form_validation->run() == FALSE){
            $data = array(
                'title'         =>'YPD Nurul Wathan',
                'title2'        =>'Edit Pengumuman',
                'pengumuman'    => $this->m_pengumuman->detail($id_pengumuman),
                'isi'           =>'admin/pengumuman/v_edit'
            );
            $this->load->view('admin/layout/v_wrapper',$data,FALSE);
        }else{
        $data = array(
                'id_pengumuman'      =>$id_pengumuman,
                'judul_pengumuman'   =>$this->input->post('judul_pengumuman'),
                'isi_pengumuman'     =>$this->input->post('isi_pengumuman'),
                'tgl_pengumuman'     =>date('Y-m-d'),
                'id_user'           => $this->session->userdata('id_user'),
        );
        $this->m_pengumuman->edit($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil di Edit');
        redirect('pengumuman');
            }
    }

    public function hapus($id_pengumuman)
    {
         $data = array('id_pengumuman' => $id_pengumuman);
         $this->m_pengumuman->hapus($data);
         $this->session->set_flashdata('pesan', 'Data Berhasil di Hapus');
         redirect('pengumuman');
    }
}