<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kontak extends CI_Controller {
    public function index()
    {
    	$data['judul']='Halaman Kontak';

        $this->form_validation->set_rules('nama','Nama','trim');
         $this->form_validation->set_rules('email','Email','trim');
          $this->form_validation->set_rules('handphone','handphone','trim');
            $this->form_validation->set_rules('saran','Saran','trim');
              //kondisi
        if($this->form_validation->run()== FALSE)
        {

        $this->load->view('temp/header',$data);
        $this->load->view('temp/navbar');
        $this->load->view('kontak/index',$data);
        $this->load->view('temp/footer');
         }else
        {
             $data = array(

            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'handphone' => $this->input->post('handphone'),
            'saran' => $this->input->post('saran'),
           
          );

          $this->model_admin->tambahkontak($data);
          $data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Input  !');
          redirect('kontak', $data);
        }
    }  
}