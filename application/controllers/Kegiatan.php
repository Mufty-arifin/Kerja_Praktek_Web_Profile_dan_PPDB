
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kegiatan');
    }

    public function index()
    {
        $data = array(
            'title'=>'YPD Nurul Wathan',
            'title2'=>'Kelola kegiatan',
            'kegiatan'=>$this->m_kegiatan->lists(),
            'isi'  =>'admin/v_kegiatan'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama_kegiatan','Judul kegiatan','required');
        $this->form_validation->set_rules('isi_kegiatan','Isi kegiatan','required',array('required'=>'%s Harus Di Isi'));

        if ($this->form_validation->run() == TRUE){
            $config['upload_path'] = './foto_kegiatan/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_kegiatan'))
            {
                    $data = array(
                        'title'=>'YPD Nurul Wathan',
                        'title2'=>'Tambah Bertita',
                        'error' => $this->upload->display_errors(),
                        'isi'  =>'admin/kegiatan/v_tambah'
                    );
                    $this->load->view('admin/layout/v_wrapper',$data,FALSE);
                
            }else{
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './foto_kegiatan/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                
                $data = array(
                    'nama_kegiatan'      => $this->input->post('nama_kegiatan'),
                    'slug_kegiatan'        => url_title($this->input->post('nama_kegiatan'),'dash',TRUE),
                    'isi_kegiatan'        => $this->input->post('isi_kegiatan'),
                    'tanggal'        => date('Y-m-d'),
                    'id_user'           => $this->session->userdata('id_user'),
                    'foto_kegiatan'     => $upload_data['uploads']['file_name']
                );
                $this->m_kegiatan->tambah($data);
                $this->session->set_flashdata('pesan', 'kegiatan Berhasil di Posting');
                redirect('kegiatan');
            }
        }
        $data = array(
            'title'=>'YPD Nurul Wathan',
            'title2'=>'Tambah kegiatan',
            'isi'  =>'admin/kegiatan/v_tambah'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function edit($id_kegiatan)
    {
        $this->form_validation->set_rules('nama_kegiatan','Judul kegiatan','required');
        $this->form_validation->set_rules('isi_kegiatan','Isi kegiatan','required',array('required'=>'%s Harus Di Isi'));
        

        if ($this->form_validation->run() == TRUE){
            $config['upload_path'] = './foto_kegiatan/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_kegiatan'))
            {
                    $data = array(
                        'title'=>'YPD Nurul Wathan',
                        'title2'=>'Edit kegiatan',
                        'error' => $this->upload->display_errors(),
                        'kegiatan'  =>$this->m_kegiatan->detail($id_kegiatan),
                        'isi'  =>'admin/kegiatan/v_edit'
                    );
                    $this->load->view('admin/layout/v_wrapper',$data,FALSE);
                
            }else
            {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './foto_kegiatan/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                //menghapus foto lama
                $kegiatan=$this->m_kegiatan->detail($id_kegiatan);
                if ($kegiatan->foto_kegiatan !=""){
                    unlink('./foto_kegiatan/'.$kegiatan->foto_kegiatan);
                }
                //end menghapus foto
                $data = array(
                    'id_kegiatan'         => $id_kegiatan,
                    'nama_kegiatan'      => $this->input->post('nama_kegiatan'),
                    'slug_kegiatan'        => url_title($this->input->post('nama_kegiatan'),'dash',TRUE),
                    'isi_kegiatan'        => $this->input->post('isi_kegiatan'),
                    'id_user'           => $this->session->userdata('id_user'),
                    'tanggal'        => date('Y-m-d'),
                    'foto_kegiatan'     => $upload_data['uploads']['file_name']
                );
                $this->m_kegiatan->edit($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil di Edit');
                redirect('kegiatan');
            }
             // Tanpa upload foto
             $upload_data = array('uploads' => $this->upload->data());
             $config['image_library'] = 'gd2';
             $config['source_image'] = './foto_kegiatan/'.$upload_data['uploads']['file_name'];
             $this->load->library('image_lib', $config);

            $data = array(
                'id_kegiatan'         => $id_kegiatan,
                'nama_kegiatan'      => $this->input->post('nama_kegiatan'),
                'slug_kegiatan'        => url_title($this->input->post('nama_kegiatan'),'dash',TRUE),
                'isi_kegiatan'        => $this->input->post('isi_kegiatan'),
                'id_user'           => $this->session->userdata('id_user')
            );
            $this->m_kegiatan->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil di Edit');
            redirect('kegiatan');
        }
        $data = array(
            'title' =>'YPD Nurul Wathan',
            'title2'=>'Edit kegiatan',
            'kegiatan'  =>$this->m_kegiatan->detail($id_kegiatan),
            'isi'   =>'admin/kegiatan/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

        // Hapus kegiatan
    public function hapus($id_kegiatan)
    {
        //menghapus foto lama
        $kegiatan=$this->m_kegiatan->detail($id_kegiatan);
        if ($kegiatan->foto_kegiatan !=""){
            unlink('./foto_kegiatan/'.$kegiatan->foto_kegiatan);
        }
    
        $data = array('id_kegiatan' => $id_kegiatan);
            $this->m_kegiatan->hapus($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil di Hapus');
         redirect('kegiatan');
    }
}