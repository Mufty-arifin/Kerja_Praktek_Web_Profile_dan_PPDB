<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_guru');
        $this->load->library('upload');
    }

    public function index()
    {
        $data = array(
            'title'=>'YPD Nurul Wathan',
            'title2'=>'Kelola Guru',
            'guru'=>$this->m_guru->lists(),
            'isi'  =>'admin/v_guru'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nip_guru','NIP','required');
        $this->form_validation->set_rules('nama_guru','Nama Guru','required');
        $this->form_validation->set_rules('jk_guru','Jenis Kelamin','required');
        $this->form_validation->set_rules('tempat_lahir','Tempat Lahir','required');
        $this->form_validation->set_rules('tgl_lahir','Tanggal Lahir','required');
        $this->form_validation->set_rules('mapel_guru','Mata Pelajaran','required');
        //$this->form_validation->set_rules('foto_guru','Foto Guru');

        if ($this->form_validation->run() == TRUE){
            $config['upload_path'] = './foto_guru/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_guru'))
            {
                    $data = array(
                        'title'=>'YPD Nurul Wathan',
                        'title2'=>'Tambah Data Guru',
                        'error' => $this->upload->display_errors(),
                        'isi'  =>'admin/guru/v_tambah'
                    );
                    $this->load->view('admin/layout/v_wrapper',$data,FALSE);
                
            }else{
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './foto_guru/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                
                $data = array(
                    'nip_guru'      => $this->input->post('nip_guru'),
                    'nama_guru'     => $this->input->post('nama_guru'),
                    'jk_guru'       => $this->input->post('jk_guru'),
                    'tempat_lahir'  => $this->input->post('tempat_lahir'),
                    'tgl_lahir'     => $this->input->post('tgl_lahir'),
                    'mapel_guru'    => $this->input->post('mapel_guru'),
                    'id_user'           => $this->session->userdata('id_user'),
                    'foto_guru'     => $upload_data['uploads']['file_name']
                );
                $this->m_guru->tambah($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil di Tambahkan');
                redirect('guru');
            }
        }
        $data = array(
            'title'=>'YPD Nurul Wathan',
            'title2'=>'Tambah Data Guru',
            'isi'  =>'admin/guru/v_tambah'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    //Edit data guru
    public function edit($id_guru)
    {
        $this->form_validation->set_rules('nip_guru','NIP','required');
        $this->form_validation->set_rules('nama_guru','Nama Guru','required');
        $this->form_validation->set_rules('jk_guru','Jenis Kelamin','required');
        $this->form_validation->set_rules('tempat_lahir','Tempat Lahir','required');
        $this->form_validation->set_rules('tgl_lahir','Tanggal Lahir','required');
        $this->form_validation->set_rules('mapel_guru','Mata Pelajaran','required');


        if ($this->form_validation->run() == TRUE){
            $config['upload_path'] = './foto_guru/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_guru'))
            {
                    $data = array(
                        'title'=>'YPD Nurul Wathan',
                        'title2'=>'Edit Data Guru',
                        'error' => $this->upload->display_errors(),
                        'guru'  =>$this->m_guru->detail($id_guru),
                        'isi'  =>'admin/guru/v_edit'
                    );
                    $this->load->view('admin/layout/v_wrapper',$data,FALSE);
                
            }else
            {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './foto_guru/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                //menghapus foto lama
                $guru=$this->m_guru->detail($id_guru);
                if ($guru->foto_guru !=""){
                    unlink('./foto_guru/'.$guru->foto_guru);
                }
                //end menghapus foto
                $data = array(
                    'id_guru'           =>  $id_guru,
                    'nip_guru'          => $this->input->post('nip_guru'),
                    'nama_guru'         => $this->input->post('nama_guru'),
                    'jk_guru'           => $this->input->post('jk_guru'),
                    'tempat_lahir'      => $this->input->post('tempat_lahir'),
                    'tgl_lahir'         => $this->input->post('tgl_lahir'),
                    'mapel_guru'        => $this->input->post('mapel_guru'),
                    'id_user'           => $this->session->userdata('id_user'),
                    'foto_guru'         => $upload_data['uploads']['file_name'],
                );
                $this->m_guru->edit($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil di Edit');
                redirect('guru');
            }
            // Tanpa upload foto
            $upload_data = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './foto_guru/'.$upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);
            
            $data = array(
                'id_guru'           =>  $id_guru,
                'nip_guru'          => $this->input->post('nip_guru'),
                'nama_guru'         => $this->input->post('nama_guru'),
                'jk_guru'           => $this->input->post('jk_guru'),
                'tempat_lahir'      => $this->input->post('tempat_lahir'),
                'tgl_lahir'         => $this->input->post('tgl_lahir'),
                'mapel_guru'        => $this->input->post('mapel_guru'),
                'id_user'           => $this->session->userdata('id_user')
            );
            $this->m_guru->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil di Edit');
            redirect('guru');
        }
        $data = array(
            'title' =>'YPD Nurul Wathan',
            'title2'=>'Edit Data Guru',
            'guru'  =>$this->m_guru->detail($id_guru),
            'isi'   =>'admin/guru/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    // Hapus Data
    public function delete($id_guru)
    {
         //menghapus foto lama
         $guru=$this->m_guru->detail($id_guru);
         if ($guru->foto_guru !=""){
             unlink('./foto_guru/'.$guru->foto_guru);
         }
         //end menghapus foto

         $data = array('id_guru' => $id_guru);
         $this->m_guru->delete($data);
         $this->session->set_flashdata('pesan', 'Data Berhasil di Hapus');
         redirect('guru');
    }
}