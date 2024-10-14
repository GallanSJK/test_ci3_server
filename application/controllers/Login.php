<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        // Data yang ingin dikirim ke view
        $data['title'] = "SELAMAT DATANG DI PT BOCOROCCO ENTREPRENEUR INDONESIA";
        
        // Memuat view
        $this->load->view('login', $data);
    }
}