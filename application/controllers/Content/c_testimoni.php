<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_testimoni extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            redirect("content/c_login");
        }
    }

    public function index()
    {
        $data['title'] = "Testimoni";
        $data['page'] = "testimoni";
        $this->load->view('content/template', $data);
    }
}
