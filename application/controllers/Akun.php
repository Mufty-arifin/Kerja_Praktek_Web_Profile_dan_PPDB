<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_akun');
    }

    public function index()
    {
        $data = array(
            'title'=>'YPD Nurul Wathan',
            'title2'=>'Kelola Akun',
            'akun'=>$this->m_akun->lists(),
            'isi'  =>'admin/v_akun'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }
    
    public function tambah()
    {
        $this->form_validation->set_rules('nama_user','nama_user','required');
        $this->form_validation->set_rules('username','username','required');
        $this->form_validation->set_rules('password','password','required');
        if ($this->form_validation->run() == FALSE){
            $data = array(
                'title'=>'YPD Nurul Wathan',
                'title2'=>'Tambah Akun',
                'isi'  =>'admin/akun/v_tambah'
            );
            $this->load->view('admin/layout/v_wrapper',$data,FALSE);
        }else{
        $data = array(
           'nama_user'   =>$this->input->post('nama_user'),
           'username'     =>$this->input->post('username'),
           'password'     =>$this->input->post('password'),
        );
        $this->m_akun->tambah($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil di Tambahkan');
        redirect('akun');
            }
    }
    public function edit($id_user)
    {
        $this->form_validation->set_rules('nama_user','nama_user','required');
        $this->form_validation->set_rules('username','username','required');
        $this->form_validation->set_rules('password','password','required');
        if ($this->form_validation->run() == FALSE){
            $data = array(
                'title'         =>'YPD Nurul Wathan',
                'title2'        =>'Edit Akun',
                'akun'    => $this->m_akun->detail($id_user),
                'isi'           =>'admin/akun/v_edit'
            );
            $this->load->view('admin/layout/v_wrapper',$data,FALSE);
        }else{
        $data = array(
            'nama_user'   =>$this->input->post('nama_user'),
            'username'     =>$this->input->post('username'),
            'password'     =>$this->input->post('password'),
        );
        $this->m_akun->edit($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil di Edit');
        redirect('akun');
            }
    }
    public function hapus($id_user)
    {
         $data = array('id_user' => $id_user);
         $this->m_akun->hapus($data);
         $this->session->set_flashdata('pesan', 'Data Berhasil di Hapus');
         redirect('akun');
    }
}