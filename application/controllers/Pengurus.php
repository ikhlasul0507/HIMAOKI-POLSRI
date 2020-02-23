<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengurus extends CI_Controller {
    public function index()
    {
    	$data['judul']='Halaman Pengurus';
    	$data['pengurus'] = $this->model_admin->getAllpengurus();
        $this->load->view('temp/header',$data);
        $this->load->view('temp/navbar');
        $this->load->view('pengurus/index',$data);
        $this->load->view('temp/footer');
    }
   
}