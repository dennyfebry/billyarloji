<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_category', 'ctg');
        $this->load->model('m_brand', 'brn');
    }

    public function index()
    {
        $data['menu'] = $this->ctg->getMenu();
        $data['titlepage'] = "Home";
        $data['page'] = "home";
        $this->load->view('user/template', $data);
    }
}