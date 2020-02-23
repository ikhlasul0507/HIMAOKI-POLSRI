<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class peserta extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //$this->load->library('form_validation','upload');
    }

    public function index()
    {
       $data['judul']='Halaman Login Peserta';
       $this->load->view('temp/header',$data);
       $this->load->view('peserta/index');
       $this->load->view('temp/footer');

    }

     public function login()
    {
      if(isset($_POST['masuk']))
      {

        $handphone_peserta = $this->input->post('handphone_peserta',true);
        $token = $this->input->post('token',true);
        // boros oooo
        $cek = $this->model_admin->loginpesertahandphone( $handphone_peserta);
        $cek = $this->model_admin->loginpesertatoken($token);  
        $hasil= count($cek);

        if($hasil> 0)
          {
           $this->session->set_userdata(array('handphone_peserta'=>$handphone_peserta));
           $this->session->set_userdata(array('token'=>$token));
           $this->session->set_flashdata('pesan', 'Selamat Anda Berhasil Login !');
           redirect('peserta/konten',$cek);
          
          }else
          {  
            $this->session->set_flashdata('pesan', 'Silahkan Masukan Data Anda!');
            redirect('peserta');
          }
      }
    }
     public function konten()
     {
       
        //form validation
          $this->form_validation->set_rules('id_peserta', 'id_peserta', 'required|trim');
          $this->form_validation->set_rules('nama_peserta', 'nama_peserta', 'required|trim');
          $this->form_validation->set_rules('handphone_peserta', 'handphone_peserta', 'required|trim');
          $this->form_validation->set_rules('alamat_peserta', 'alamat_peserta', 'required|trim');
          $this->form_validation->set_rules('jurusan_peserta', 'jurusan_peserta', 'required|trim');
          $this->form_validation->set_rules('sekolah_peserta', 'sekolah_peserta', 'required|trim');
          $this->form_validation->set_rules('paket_peserta', 'paket_peserta', 'required|trim');
          $this->form_validation->set_rules('bayar', 'bayar', 'trim');
          $this->form_validation->set_rules('absen_pagi', 'absen_pagi', 'trim');
          $this->form_validation->set_rules('snack_peserta', 'snack_peserta', 'trim');
          $this->form_validation->set_rules('absen_siang', 'absen_siang', 'trim');
          $this->form_validation->set_rules('makan_siang', 'makan_siang', 'trim');
      
         
          if ($this->form_validation->run() == FALSE)
              {
                 $data['judul']='Halaman Konten Peserta';
                 $this->load->view('temp/header',$data);
                 $this->load->view('peserta/konten');
                 $this->load->view('temp/footer');
              }else{  
                      $id_peserta = $this->input->post('id_peserta');         
                      $data = array(
                        'id_peserta' => $this->input->post('id_peserta'),
                        'nama_peserta' => $this->input->post('nama_peserta'),
                        'handphone_peserta' => $this->input->post('handphone_peserta'),
                        'alamat_peserta' => $this->input->post('alamat_peserta'),
                        'jurusan_peserta' => $this->input->post('jurusan_peserta'),
                        'sekolah_peserta' => $this->input->post('sekolah_peserta'),
                        'paket_peserta' => $this->input->post('paket_peserta'),
                        'bayar' => $this->input->post('bayar'),
                        'absen_pagi' => $this->input->post('absen_pagi'),
                        'snack_peserta' => $this->input->post('snack_peserta'),
                        'absen_siang' => $this->input->post('absen_siang'),
                        'makan_siang' => $this->input->post('makan_siang')
                        //'photo_admin' => $this->input->post('photo_admin'),
                      );
            $this->model_admin->ubahDataPeserta($id_peserta,$data);
            die();
            //$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Edit  !');
            //redirect('admin/konten', $data);
              }
      }

      public function perbaharui ()
      {
                      $id_peserta = $this->input->post('id_peserta');         
                      $data = array(
                        'id_peserta' => $this->input->post('id_peserta'),
                        'nama_peserta' => $this->input->post('nama_peserta'),
                        'handphone_peserta' => $this->input->post('handphone_peserta'),
                        'alamat_peserta' => $this->input->post('alamat_peserta'),
                        'jurusan_peserta' => $this->input->post('jurusan_peserta'),
                        'sekolah_peserta' => $this->input->post('sekolah_peserta'),
                        'paket_peserta' => $this->input->post('paket_peserta'),
                        'bayar' => $this->input->post('bayar'),
                        'absen_pagi' => $this->input->post('absen_pagi'),
                        'absen_siang' => $this->input->post('absen_siang'),
                        'makan_siang' => $this->input->post('makan_siang')
                        //'photo_admin' => $this->input->post('photo_admin'),
                      );
            $this->model_admin->ubahDataPeserta($id_peserta,$data);
            
            $data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Edit  !');
          redirect('peserta/konten', $data);
      }
  }