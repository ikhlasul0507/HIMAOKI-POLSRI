<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tryout extends CI_Controller {
    public function index()
    {
    	$data['judul']='Halaman Tryout';
        $this->load->view('temp/header',$data);
        $this->load->view('temp/navbar');
        $this->load->view('tryout/index');
        $this->load->view('temp/footer');
    }
     public function daftar()
    {
    	$data['judul']='Halaman Daftar Tryout';
        //validation form
      
          $this->form_validation->set_rules('nama_peserta','Nama Peserta','trim');
          $this->form_validation->set_rules('handphone_peserta','Handphone Peserta','trim','is_unique[tbl_peserta.handphone_peserta]');
          $this->form_validation->set_rules('alamat_peserta','Alamat Peserta','trim');
          $this->form_validation->set_rules('jurusan_peserta','Jurusan Peserta','trim');
          $this->form_validation->set_rules('sekolah_peserta','Sekolah Peserta','trim');
          $this->form_validation->set_rules('paket_peserta','Paket Peserta','trim');  
          $this->form_validation->set_rules('bukti','bukti','trim');   
          $this->form_validation->set_rules('bayar','bayar','trim');
          $this->form_validation->set_rules('absen_pagi','absen_pagi','trim');
           $this->form_validation->set_rules('absen_siang','absen_siang','trim');
            $this->form_validation->set_rules('makan_siang','makan_siang','trim');
             $this->form_validation->set_rules('status','status','trim');
              $this->form_validation->set_rules('nilai','nilai','trim');
         

        //kondisi
        if($this->form_validation->run()== FALSE)
        {

        $this->load->view('temp/header',$data);
        $this->load->view('temp/navbar');
        $this->load->view('tryout/daftar');
        $this->load->view('temp/footer');
        }else
        {
             $data = array(

            'nama_peserta' => $this->input->post('nama_peserta'),
            'handphone_peserta' => $this->input->post('handphone_peserta'),
            'alamat_peserta' => $this->input->post('alamat_peserta'),
            'jurusan_peserta' => $this->input->post('jurusan_peserta'),
            'sekolah_peserta' => $this->input->post('sekolah_peserta'),
            'paket_peserta' => $this->input->post('paket_peserta'),
            'bukti' => $this->input->post('bukti'),
            'bayar' => $this->input->post('bayar'),
            'absen_pagi' => $this->input->post('absen_pagi'),
             'absen_siang' => $this->input->post('absen_siang'),
              'makan_siang' => $this->input->post('makan_siang'),
               'status' => $this->input->post('status'),
                'nilai' => $this->input->post('nilai'),
            
          
          );
          if (!empty($_FILES['bukti']['name'])) 
          {
            $upload = $this->_do_upload_peserta();
            $data['bukti'] = $upload;
          }

          $this->model_admin->tambahpeserta($data);
          $data = $this->session->set_userdata(array('nama_peserta'=>$nama_peserta));
          $data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Tambah  !');
          redirect('tryout/selesai', $data);
        }
    }
    private function _do_upload_peserta()
      {
        $config['upload_path']    = './assets/images';
        $config['allowed_types']  = 'jpeg|jpg|png';
        $config['max_size']     = 100000;
        $config['max_width']    = 10000;
        $config['max_height']     = 10000;
        $config['file_name']    = $this->input->post('bukti');
     
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('bukti')) {
          //die();
          $this->session->set_flashdata('msg','Gagal Upload');
          redirect('tryout/selesai');
        }
        return $this->upload->data('file_name');
      }

    public function tata_cara()
    {
    	  $data['judul']='Halaman Tata Cara Tryout';
        $data['tata'] = $this->model_admin->getAlltata();
        $this->load->view('temp/header',$data);
        $this->load->view('temp/navbar');
        $this->load->view('tryout/tata_cara',$data);
        $this->load->view('temp/footer');
    }
    public function selesai()
    {
        $data['judul']='Halaman Selesai Daftar';
        $data['token'] = $this->model_admin->getAlltoken();
        $this->load->view('temp/header',$data);
        $this->load->view('temp/navbar');
        $this->load->view('tryout/selesai',$data);
        $this->load->view('temp/footer');
    }
   
}