<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_testimoni extends CI_Controller
{
    var $data = array();

    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            redirect("login");
        }
        $this->load->model('m_testimoni', 'ref');
        $this->load->library('form_validation');
        $this->data = array(
            'titlepage' => 'Testimoni'
        );
    }

    public function index()
    {
        $data = $this->data;
        $data['page'] = "testimoni/index";
        $data['testimoni'] = $this->ref->getAll();
        $this->load->view('content/layout', $data);
    }

    public function add()
    {
        $testimoni = $this->ref;
        $validation = $this->form_validation;
        $validation->set_rules($testimoni->rules());

        if ($validation->run()) {
            $testimoni->save();
            $this->session->set_flashdata('success', 'Saved successfully');
            // redirect('testimoni');
        }

        $data = $this->data;
        $data['page'] = "testimoni/form";
        $data['rows'] = $this->ref->getAll();
        $data['content'] = "Add";
        $this->load->view('content/layout', $data);
    }

    public function edit($id)
    {
        if (!isset($id)) redirect('testimoni');

        $testimoni = $this->ref;
        $validation = $this->form_validation;
        $validation->set_rules($testimoni->rules());

        if ($validation->run()) {
            $testimoni->update();
            $this->session->set_flashdata('success', 'Saved successfully');
            // redirect('testimoni');
        }

        $data = $this->data;

        $data['testimoni'] = $testimoni->getById($id);
        if (!$data['testimoni']) show_404();

        $data['page'] = "testimoni/form";
        $data['rows'] = $this->ref->getAll();
        $data['content'] = "Edit";
        $this->load->view('content/layout', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->ref->delete($id)) {
            redirect(site_url('testimoni'));
        }
    }
}
