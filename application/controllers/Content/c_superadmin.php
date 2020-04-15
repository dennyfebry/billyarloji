<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_superadmin extends CI_Controller
{
    var $data = array();

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect("login");
        } else if ($this->session->userdata('role') != 1) {
            redirect("login");
        }
        $this->load->model('m_superadmin', 'ref');
        $this->load->library('form_validation');
        $this->data = array(
            'titlepage' => 'Superadmin'
        );
    }


    public function index()
    {
        $data = $this->data;
        $data['page'] = "superadmin";
        $data['account'] = $this->ref->getAll();
        $this->load->view('content/template', $data);
    }

    public function add()
    {
        $account = $this->ref;
        $validation = $this->form_validation;
        $validation->set_rules($account->rules());

        if ($validation->run()) {
            $account->save();
            $this->session->set_flashdata('success', 'Saved successfully');
            // redirect('content/c_superadmin', 'refresh');
        }

        $data = $this->data;
        $data['page'] = "crud_superadmin";
        $data['content'] = "Add";
        $this->load->view('content/template', $data);
    }

    public function edit($id)
    {
        if (!isset($id)) redirect('content/c_superadmin');

        $account = $this->ref;
        $validation = $this->form_validation;
        $validation->set_rules($account->rules());

        if ($validation->run()) {
            $account->update();
            $this->session->set_flashdata('success', 'Saved successfully');
            // redirect('content/c_superadmin', 'refresh');
        }

        $data = $this->data;

        $data['account'] = $account->getById($id);
        if (!$data['account']) show_404();

        $data['page'] = "crud_superadmin";
        $data['content'] = "Edit";
        $this->load->view('content/template', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->ref->delete($id)) {
            redirect(site_url('content/c_superadmin'));
        }
    }
}
