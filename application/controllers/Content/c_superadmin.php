<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_superadmin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            redirect("content/c_login");
        } else if ($this->session->userdata('role') != 1) {
            redirect("content/c_login");
        }
    }

    public function index()
    {
        $this->load->view('content/superadmin');
    }
}
