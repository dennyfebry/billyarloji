<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_product extends CI_Controller
{

    public function index()
    {
        $data['titlepage'] = "Product";
        $data['page'] = "product";
        $this->load->view('user/template', $data);
    }
}
