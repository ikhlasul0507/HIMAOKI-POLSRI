<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //$this->load->library('form_validation','upload');
    }

    public function index()
    {
       $data['judul']='Halaman Admin';
       $this->load->view('temp/header',$data);
       $this->load->view('admin/index');
       $this->load->view('temp/footer');

    }
     public function konten()
    {
       $data['judul']='Halaman Admin';
       $this->load->view('admin/header',$data);
       $this->load->view('admin/navbar');
       $this->load->view('admin/konten');
       $this->load->view('admin/footer');

    }
     public function kelola_token()
    {
       $data['judul']='Halaman Token';
       $data['token'] = $this->model_admin->getAlltoken();
       $this->load->view('admin/header',$data);
       $this->load->view('admin/navbar');
       $this->load->view('admin/kelola_token');
       $this->load->view('admin/footer');

    }
     public function hapus_token($id_token)
      {
        $this->model_admin->hapusDataToken($id_token);
        $data = $this->session->set_flashdata('pesan',' Data Berhasil Dihapus !');
        redirect('admin/kelola_token',$data);
      }
      public function tambah_token(){
         $data['judul']='Halaman Tambah Token';
        //validation form
      
        $this->form_validation->set_rules('token','Token','trim');
        //kondisi
        if($this->form_validation->run()== FALSE)
        {

           $this->load->view('admin/header',$data);
           $this->load->view('admin/navbar');
           $this->load->view('admin/tambah_token');
           $this->load->view('admin/footer');
        }else
        {
         $data = array('token' => $this->input->post('token'));
         
          $this->model_admin->tambahtoken($data);
          $data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Tambah  !');
          redirect('admin/kelola_token', $data);
        }
      }
     public function kelola_tatacara()
    {
       $data['judul']='Halaman Kelola Tata Cara';
       $data['tata'] = $this->model_admin->getAlltata();
       $this->load->view('admin/header',$data);
       $this->load->view('admin/navbar');
       $this->load->view('admin/kelola_tatacara',$data);
       $this->load->view('admin/footer');

    }
     public function tambah_tata_cara(){
         $data['judul']='Halaman Tambah Tata Cara';
        //validation form
      
        $this->form_validation->set_rules('nama_rekening','nama_rekening','required|trim');
        $this->form_validation->set_rules('no_rekening','no_rekening','required|trim');
        $this->form_validation->set_rules('nama_bank','nama_bank','required|trim');
        $this->form_validation->set_rules('waktu','waktu','required|trim');
        $this->form_validation->set_rules('lokasi','lokasi','required|trim');
        $this->form_validation->set_rules('pukul','pukul','required|trim');
        //kondisi
        if($this->form_validation->run()== FALSE)
        {

           $this->load->view('admin/header',$data);
           $this->load->view('admin/navbar');
           $this->load->view('admin/tambah_tata_cara');
           $this->load->view('admin/footer');
        }else
        {
         $data = array(
                    'nama_rekening' => $this->input->post('nama_rekening'),
                    'no_rekening' => $this->input->post('no_rekening'),
                    'nama_bank' => $this->input->post('nama_bank'),
                    'waktu' => $this->input->post('waktu'),
                    'lokasi' => $this->input->post('lokasi'),
                    'pukul' => $this->input->post('pukul')
                  );
         
          $this->model_admin->tambahtatacara($data);
          $data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Tambah  !');
          redirect('admin/kelola_tatacara', $data);
        }
      }

       public function hapus_tata_cara($id_tata_cara)
      {
        $this->model_admin->hapusDataTatacara($id_tata_cara);
        $data = $this->session->set_flashdata('pesan',' Data Berhasil Dihapus !');
        redirect('admin/kelola_tatacara',$data);
      }
     public function kelola_admin()
    {
       $data['admin']= $this->model_admin->getAlladmin();
       $data['judul']='Halaman Kelola Admin';
       $this->load->view('admin/header',$data);
       $this->load->view('admin/navbar');
       $this->load->view('admin/kelola_admin',$data);
       $this->load->view('admin/footer');

    }
     public function kelola_berita()
    {
       $data['judul']='Halaman Kelola Berita';
       $data['berita'] = $this->model_admin->getAllberita();
       $this->load->view('admin/header',$data);
       $this->load->view('admin/navbar');
       $this->load->view('admin/kelola_berita',$data);
       $this->load->view('admin/footer');

    }
    public function tambah_berita()
    {
        $data['judul']='Halaman Tambah Berita';
        //validation form
      
        $this->form_validation->set_rules('judul_berita','Judul Berita','trim');
         $this->form_validation->set_rules('tgl_berita','Tanggal Berita','trim');
          $this->form_validation->set_rules('isi_berita','isi Berita','trim');
            $this->form_validation->set_rules('photo_berita','Photo Berita','trim');

        //kondisi
        if($this->form_validation->run()== FALSE)
        {

           $this->load->view('admin/header',$data);
           $this->load->view('admin/navbar');
           $this->load->view('admin/tambah_berita');
           $this->load->view('admin/footer');
        }else
        {
             $data = array(

            'judul_berita' => $this->input->post('judul_berita'),
            'tgl_berita' => $this->input->post('tgl_berita'),
            'isi_berita' => $this->input->post('isi_berita'),
            'photo_berita' => $this->input->post('photo_berita'),
           
          );
          if (!empty($_FILES['photo_berita']['name'])) 
          {
            $upload = $this->_do_upload_berita();
            $data['photo_berita'] = $upload;
          }

          $this->model_admin->tambahberita($data);
          $data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Tambah  !');
          redirect('admin/kelola_berita', $data);
        }
    }
    private function _do_upload_berita()
      {
        $config['upload_path']    = './assets/images';
        $config['allowed_types']  = 'jpeg|jpg|png';
        $config['max_size']     = 10000;
        $config['max_width']    = 10000;
        $config['max_height']     = 10000;
        $config['file_name']    = $this->input->post('photo_berita');
     
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('photo_berita')) {
          //die();
          $this->session->set_flashdata('msg','Gagal Upload');
          redirect('admin/tambah_berita');
        }
        return $this->upload->data('file_name');
      }

    public function hapus_berita($id_berita)
      {
        $this->model_admin->hapusDataBerita($id_berita);
        $data = $this->session->set_flashdata('pesan',' Data Berhasil Dihapus !');
        redirect('admin/kelola_berita',$data);
      }
     public function kelola_grafik()
    {
       $data['judul']='Halaman Kelola Grafik';
       $this->load->view('admin/header',$data);
       $this->load->view('admin/navbar');
       $this->load->view('admin/kelola_grafik');
       $this->load->view('admin/footer');

    }
     public function kelola_pengurus()
    {
       $data['judul']='Halaman Kelola Pengurus';
       $data['pengurus'] = $this->model_admin->getAllpengurus();
       $this->load->view('admin/header',$data);
       $this->load->view('admin/navbar');
       $this->load->view('admin/kelola_pengurus',$data);
       $this->load->view('admin/footer');

    }
     public function tambah_pengurus()
    {
        $data['judul']='Halaman Tambah Pengurus';
        //validation form
          $this->form_validation->set_rules('no_urut','No Urut','trim');
        $this->form_validation->set_rules('nama_pengurus','Nama Pengurus','trim');
         $this->form_validation->set_rules('jabatan_pengurus','Jabatan Pengurus','trim');
            $this->form_validation->set_rules('photo','Photo Pengurus','trim');
        //kondisi
        if($this->form_validation->run()== FALSE)
        {

           $this->load->view('admin/header',$data);
           $this->load->view('admin/navbar');
           $this->load->view('admin/tambah_pengurus');
           $this->load->view('admin/footer');
        }else
        {
             $data = array(
               'no_urut'=> $this->input->post('no_urut'),
            'nama_pengurus' => $this->input->post('nama_pengurus'),
            'jabatan_pengurus' => $this->input->post('jabatan_pengurus'),
            'photo' => $this->input->post('photo'),
          );
          if (!empty($_FILES['photo']['name'])) 
          {
            $upload = $this->_do_upload_pengurus();
            $data['photo'] = $upload;
          }

          $this->model_admin->tambahpengurus($data);
          $data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Tambah  !');
          redirect('admin/kelola_pengurus', $data);
        }
    }
    private function _do_upload_pengurus()
      {
        $config['upload_path']    = './assets/images';
        $config['allowed_types']  = 'jpeg|jpg|png';
        $config['max_size']     = 10000;
        $config['max_width']    = 10000;
        $config['max_height']     = 10000;
        $config['file_name']    = $this->input->post('photo');
     
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('photo')) {
          //die();
          $this->session->set_flashdata('msg','Gagal Upload');
          redirect('admin/tambah_pengurus');
        }
        return $this->upload->data('file_name');
      }

    public function hapus_pengurus($id_pengurus)
      {
        $this->model_admin->hapusDataPengurus($id_pengurus);
        $data = $this->session->set_flashdata('pesan',' Data Berhasil Dihapus !');
        redirect('admin/kelola_pengurus',$data);
      }
     public function kelola_saran()
    {
       $data['judul']='Halaman Kelola Saran';
       $data['saran'] = $this->model_admin->getAllsaran();
       $this->load->view('admin/header',$data);
       $this->load->view('admin/navbar');
       $this->load->view('admin/kelola_saran',$data);
       $this->load->view('admin/footer');

    }
     public function hapus_saran($id_kontak)
      {
        $this->model_admin->hapusDataSaran($id_kontak);
        $data = $this->session->set_flashdata('pesan',' Data Berhasil Dihapus !');
        redirect('admin/kelola_saran',$data);
      }
     public function kelola_tryout()
    {
       $data['judul']='Halaman Kelola Tryout';
       $data['tryout'] = $this->model_admin->getAlltryout();
       $this->load->view('admin/kelola_tryout',$data);
   
    }
    public function validasi_bayar($id_peserta)
      { 
        $data['judul']= 'Halaman Verifikasi Pembayaran';
        $data['peserta']= $this->model_admin->getPesertaById($id_peserta);
        //validation form
              $this->form_validation->set_rules('nama_peserta','Nama Peserta','trim');
              $this->form_validation->set_rules('handphone_peserta','Handphone Peserta','trim','is_unique[tbl_peserta.handphone_peserta]');
              $this->form_validation->set_rules('alamat_peserta','Alamat Peserta','trim');
              $this->form_validation->set_rules('jurusan_peserta','Jurusan Peserta','trim');
              $this->form_validation->set_rules('sekolah_peserta','Sekolah Peserta','trim');
              $this->form_validation->set_rules('paket_peserta','Paket Peserta','trim');  
              $this->form_validation->set_rules('bukti','bukti','trim');   
              $this->form_validation->set_rules('bayar','bayar','trim');

        //kondisi
        if($this->form_validation->run()== FALSE)
        {
          
          $this->load->view('admin/header',$data);
           $this->load->view('admin/navbar');
          $this->load->view('admin/validasi_bayar',$data);
          $this->load->view('admin/footer');
        }else
        {
          
          $this->model_admin->lengkapiPeserta($id_peserta);
          $data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Validasi  !');
          redirect('admin/kelola_tryout', $data);
        }
      }

      public function validasi_selesai($id_peserta)
      { 
        $data['judul']= 'Halaman Verifikasi Selesai';
        $data['peserta']= $this->model_admin->getPesertaById($id_peserta);
        //validation form
              $this->form_validation->set_rules('nama_peserta','Nama Peserta','trim');
              $this->form_validation->set_rules('handphone_peserta','Handphone Peserta','trim','is_unique[tbl_peserta.handphone_peserta]');
              $this->form_validation->set_rules('alamat_peserta','Alamat Peserta','trim');
              $this->form_validation->set_rules('jurusan_peserta','Jurusan Peserta','trim');
              $this->form_validation->set_rules('sekolah_peserta','Sekolah Peserta','trim');
              $this->form_validation->set_rules('paket_peserta','Paket Peserta','trim');  
              $this->form_validation->set_rules('bukti','bukti','trim');   
              $this->form_validation->set_rules('absen_pagi','absen_pagi','trim');
           
              $this->form_validation->set_rules('absen_siang','absen_siang','trim');
              $this->form_validation->set_rules('makan_siang','makan_siang','trim');
              $this->form_validation->set_rules('status','status','trim');

        //kondisi
        if($this->form_validation->run()== FALSE)
        {
          
          $this->load->view('admin/header',$data);
          $this->load->view('admin/navbar');
          $this->load->view('admin/validasi_selesai',$data);
          $this->load->view('admin/footer');
        }else
        {
          
          $this->model_admin->lengkapiSelesai($id_peserta);
          $data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Validasi  !');
          redirect('admin/kelola_tryout', $data);
        }
      }
      public function input_nilai($id_peserta)
      { 
        $data['judul']= 'Halaman Input Nilai';
        $data['peserta']= $this->model_admin->getPesertaById($id_peserta);
        //validation form
              $this->form_validation->set_rules('nama_peserta','Nama Peserta','trim');
              $this->form_validation->set_rules('handphone_peserta','Handphone Peserta','trim','is_unique[tbl_peserta.handphone_peserta]');
              $this->form_validation->set_rules('alamat_peserta','Alamat Peserta','trim');
              $this->form_validation->set_rules('jurusan_peserta','Jurusan Peserta','trim');
              $this->form_validation->set_rules('sekolah_peserta','Sekolah Peserta','trim');
              $this->form_validation->set_rules('paket_peserta','Paket Peserta','trim');  
              $this->form_validation->set_rules('bukti','bukti','trim');   
              $this->form_validation->set_rules('absen_pagi','absen_pagi','trim');
             
              $this->form_validation->set_rules('absen_siang','absen_siang','trim');
              $this->form_validation->set_rules('makan_siang','makan_siang','trim');
              $this->form_validation->set_rules('status','status','trim');
               $this->form_validation->set_rules('nilai','nilai','required|trim');

        //kondisi
        if($this->form_validation->run()== FALSE)
        {
          
          $this->load->view('admin/header',$data);
          $this->load->view('admin/navbar');
          $this->load->view('admin/input_nilai',$data);
          $this->load->view('admin/footer');
        }else
        {
          
          $this->model_admin->nilaiSelesai($id_peserta);
          $data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Validasi  !');
          redirect('admin/kelola_tryout', $data);
        }
      }

public function sertifikat($id_peserta)
      {  
        $this->load->library('dompdf_gen');
        
        $data['judul']= 'Halaman Sertifikat';
        $data['peserta']= $this->model_admin->getPesertaById($id_peserta);
        
        $this->load->view('admin/sertifikat',$data);

        $paper_size ='A4';
        $orientation = 'landscape';
        $data_header = array('title' => 'Convert Codeigniter to PDF',);
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation, $data_header);

        //convert pdf
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('Sertifikat.pdf', array('Attachment' =>0));
      }

      public function hapus_peserta($id_peserta)
      {
        $this->model_admin->hapusDataPeserta($id_peserta);
        $data = $this->session->set_flashdata('pesan',' Data Berhasil Dihapus !');
        redirect('admin/kelola_tryout',$data);
      }
     public function tambah_admin()
    {
        $data['judul']='Halaman Tambah Admin';
        //validation form
        $this->form_validation->set_rules('nama_admin','Nama_admin','required|trim');
         $this->form_validation->set_rules('jenis_kelamin','jenis_kelamin','required|trim');
          $this->form_validation->set_rules('email_admin','Email_admin','required|trim');
           $this->form_validation->set_rules('password','Password','required|trim');
            $this->form_validation->set_rules('photo_admin','Photo_admin','trim');
        //kondisi
        if($this->form_validation->run()== FALSE)
        {
           $this->load->view('admin/header',$data);
           $this->load->view('admin/navbar');
           $this->load->view('admin/tambah_admin');
           $this->load->view('admin/footer');
        }else
        {
             $data = array(
            'nama_admin' => $this->input->post('nama_admin'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'email_admin' => $this->input->post('email_admin'),
            'password' => $this->input->post('password'),
            'photo_admin' => $this->input->post('photo_admin'),
          );
          if (!empty($_FILES['photo_admin']['name'])) 
          {
            $upload = $this->_do_upload();
            $data['photo_admin'] = $upload;
          }

          $this->model_admin->tambahadmin($data);
          $data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Tambah  !');
          redirect('admin/kelola_admin', $data);
        }
    }
    private function _do_upload()
      {
        $config['upload_path']    = './assets/images';
        $config['allowed_types']  = 'jpeg|jpg|png';
        $config['max_size']     = 10000;
        $config['max_width']    = 10000;
        $config['max_height']     = 10000;
        $config['file_name']    = $this->input->post('photo_admin');
     
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('photo_admin')) {
          //die();
          $this->session->set_flashdata('msg','Gagal Upload');
          redirect('admin/tambah_admin');
        }
        return $this->upload->data('file_name');
      }

    public function hapus_admin($id_admin)
      {
        $this->model_admin->hapusDataAdmin($id_admin);
        $data = $this->session->set_flashdata('pesan',' Data Berhasil Dihapus !');
        redirect('admin/kelola_admin',$data);
      }
    public function login()
    {
      if(isset($_POST['masuk']))
      {

        $email_admin = $this->input->post('email_admin',true);
        $password = $this->input->post('password',true);
        // boros oooo
        $cek = $this->model_admin->loginadmin( $email_admin, $password);  
        $hasil= count($cek);

        if($hasil> 0)
          {
            $this->session->set_userdata(array('email_admin'=>$email_admin));
            $this->session->set_flashdata('pesan', 'Selamat Anda Berhasil Login !');
            redirect('admin/konten',$cek);
          
          }else
          {  
            $this->session->set_flashdata('pesan', 'Silahkan Masukan Data Anda!');
            redirect('admin');
          }
      }
    }
    public function export_excel()
    {
      $data = array( 'title' => 'Laporan Excel | Peserta','peserta' => $this->model_admin->getAlltryout());
 
        $this->load->view('admin/export_excel',$data);
    }

}

  