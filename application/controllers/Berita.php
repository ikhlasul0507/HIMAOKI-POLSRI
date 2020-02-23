<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class berita extends CI_Controller {
    public function index()
    {
    	$data['judul']='Halaman Berita';
    	$data['berita'] = $this->model_admin->getAllberita();
        $this->load->view('temp/header',$data);
        $this->load->view('temp/navbar');
        $this->load->view('berita/index', $data);
        $this->load->view('temp/footer');
    }
   public function detail($id_berita)
	{
		$data['judul']= 'Halaman Detail Berita';
		$data['berita']= $this->model_admin->getBeritaById($id_berita);
 		$this->load->view('temp/header',$data);
        $this->load->view('temp/navbar');
        $this->load->view('berita/detail', $data);
        $this->load->view('temp/footer');
	}
}