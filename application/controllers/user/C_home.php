<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_home extends CI_Controller
{
    public function index()
    {
        $data['titlepage'] = "Home";
        $data['page'] = "home";
        $this->load->view('user/template', $data);
    }
}
