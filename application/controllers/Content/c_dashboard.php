<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            redirect("login");
        }
    }

    public function index()
    {
        $data['titlepage'] = "Dashboard";
        $data['page'] = "dashboard";
        $this->load->view('content/template', $data);
    }
}
