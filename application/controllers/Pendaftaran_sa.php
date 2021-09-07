<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran_sa extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pendaftaran_sa');
    }

    public function index()
	{
        $data = array(
           
            'title'=>'pendaftaran sa',
            
            'isi'  =>'v_pendaftaran_sa'
        );
     
        $this->load->view('layout/v_wrapper',$data,FALSE);

	}
    public function simpandaftarsa()
    {
        $this->form_validation->set_rules('nik','nik','required');
        $this->form_validation->set_rules('nama','nama','required');
        $this->form_validation->set_rules('alamat','alamat','required');
        $this->form_validation->set_rules('jenis_kelamin','jk','required');
        $this->form_validation->set_rules('jenjang_sekolah','jenjang_sekolah','required');
        $this->form_validation->set_rules('tempat_lahir','tempat_lahir','required');
        $this->form_validation->set_rules('tanggal_lahir','tanggal_lahir','required');
        $this->form_validation->set_rules('jumlah_saudara','jml_saudara','required');
        $this->form_validation->set_rules('status','status','required');
        $this->form_validation->set_rules('nama_ayah','nama_ayah','required');
        $this->form_validation->set_rules('nama_ibu','nama_ibu','required');
        $this->form_validation->set_rules('tlp','telepon','required');
        if ($this->form_validation->run()== TRUE) {
            $data = array(
                
                'title'=>'pendaftaran sa',
                'isi'  =>'v_pendaftaran_sa'
            );
            $this->load->view('layout/v_wrapper',$data,FALSE);
            
        }else{
            $data = array(
                
                'nik' => $this->input->post('nik'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'jenis_kelamin' => $this->input->post('jk'),
                'jenjang_sekolah' => $this->input->post('jenjang_sekolah'), 
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'jumlah_saudara' => $this->input->post('jml_saudara'),
                'status' => $this->input->post('status'),
                'nama_ayah' => $this->input->post('nama_ayah'),
                'nama_ibu' => $this->input->post('nama_ibu'),
                'tlp' => $this->input->post('telepon'),
                'tgl_pendaftaran_sa' => date('Y-m-d'),
                'biaya' => '1000000',
                
            );
            $this->m_pendaftaran_sa->simpandaftarsa($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil di Tambahkan');
            $this->load->view('buktisapdf',$data);
        }
        $this->load->library('dompdf_gen');
        $paper_size = 'A4';
        $orientation = 'potrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("bukti_sa.pdf", array('Attachment' =>0));
    }

   
   
  
}