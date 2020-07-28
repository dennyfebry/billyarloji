<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_dashboard extends CI_Controller
{
    var $data = array();

    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            redirect("login");
        }
        $this->load->model('m_dashboard', 'ref');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['titlepage']  = "Dashboard";
        $data['page']       = "dashboard/index";
        $data['count']      = '0';
        $this->load->view('content/layout', $data);
    }

    public function settinghome()
    {
        $setting            = $this->ref;
        $validation         = $this->form_validation;
        $validation->set_rules($setting->rules());

        if ($validation->run()) {
            $setting->updateSetting();
            $this->session->set_flashdata('success', 'Saved successfully');
            // redirect('about');
        }

        $data = $this->data;
        $data['atribute']   = $this->ref->getAll();
        $data['setting']    = $this->ref->getSetting();
        $data['count']      = $this->ref->count();

        $data['titlepage']  = "Setting";
        $data['page']       = "dashboard/form";
        $data['content']    = "Edit";
        $this->load->view('content/layout', $data);
    }
}
