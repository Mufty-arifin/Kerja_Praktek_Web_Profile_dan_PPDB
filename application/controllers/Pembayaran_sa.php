<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran_sa extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pembayaran_sa');
    }

    public function index()
    {
        $data = array(
            'title'=>'YPD Nurul Wathan',
            'title2'=>'Kelola Pembayaran Sekolah Agama',
            'pembayaran_sa'=>$this->m_pembayaran_sa->lists(),
            'isi'  =>'admin/v_pembayaran_sa'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }
    public function bayar_sa()
    {
        $data = array(
            'title'=>'YPD Nurul Wathan',
            'title2'=>'Bayar Sekolah Agama',
            'isi'  =>'admin/pembayaran/pembayaran_sa'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }
    public function tbayar_sa()
    {
        $this->form_validation->set_rules('nik','nama','required');
        $this->form_validation->set_rules('nama','nama','required');
        $this->form_validation->set_rules('total_bayar','total_bayar','required');
        $this->form_validation->set_rules('status_bayar','status_bayar','required');
        if ($this->form_validation->run() == FALSE){
            $data = array(
                'title'=>'YPD Nurul Wathan',
                'title2'=>'Bayar sa',
                'isi'  =>'admin/pembayaran/pembayaran_tk'
            );
            $this->load->view('admin/layout/v_wrapper',$data,FALSE);
        }else{
        $data = array(
           'nik'   =>$this->input->post('nik'),
           'nama'     =>$this->input->post('nama'),
           'tgl_pembayaran'     =>date('Y-m-d'),
           'total_bayar'    =>$this->input->post('total_bayar'),
           'status_bayar'    =>$this->input->post('status_bayar'),
        );
        $this->m_pembayaran_sa->tbayar_sa($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil di Tambahkan');
        $this->load->view('admin/buktipembayaran_sa',$data);
            }
            $this->load->library('dompdf_gen');
            $paper_size = 'A4';
            $orientation = 'potrait';
            $html = $this->output->get_output();
            $this->dompdf->set_paper($paper_size, $orientation);
            $this->dompdf->load_html($html);
            $this->dompdf->render();
            $this->dompdf->stream("buktipembayaran_sa.pdf", array('Attachment' =>0));
    }
}