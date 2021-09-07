<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_tk extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_laporan_tk');
    }

    public function index()
    {
        $data = array(

            'title'=>'YPD Nurul Wathan',
            'title2'=>'Kelola Laporan TK',
            'laporan_tk'=>$this->m_laporan_tk->lists(),
            'isi'  =>'admin/v_laporan_tk'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
       
    }
   
    public function pdf(){
		$this->load->library('dompdf_gen');
		

		$data['row'] = $this->m_laporan_tk->get()->result();

		$this->load->view('admin/laporan_tk/laporan_pdf',$data);
        $paper_size = 'A4';
        $orientation = 'potrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("buktibayar_tk.pdf", array('Attachment' =>0));
	}
}