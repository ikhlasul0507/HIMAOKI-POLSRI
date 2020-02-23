<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profil extends CI_Controller {
    public function index()
    {
    	$data['judul']='Halaman Profil';
        $this->load->view('temp/header',$data);
        $this->load->view('temp/navbar');
        $this->load->view('profil/index');
        $this->load->view('temp/footer');
    }
   
}