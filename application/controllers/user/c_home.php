<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_home extends CI_Controller
{
    // function __construct()
    // {
    //     parent::__construct();

    //     if ($this->session->userdata('status') != "login") {
    //         redirect("content/c_login");
    //     }
    // }

    public function index()
    {
        $data['titlepage'] = "Home";
        $data['page'] = "home";
        $this->load->view('user/template', $data);
    }
}