<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_category extends CI_Controller
{
    var $data = array();

    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            redirect("content/c_login");
        }
        $this->load->model('m_category', 'ref');
        $this->load->library('form_validation');
        $this->data = array(
            'titlepage' => 'Category'
        );
    }

    public function index()
    {
        $data = $this->data;
        $data['page'] = "category/index";
        $data['category'] = $this->ref->getAll();
        $this->load->view('content/layout', $data);
    }

    public function add()
    {
        $category = $this->ref;
        $validation = $this->form_validation;
        $validation->set_rules($category->rules());

        if ($validation->run()) {
            $category->save();
            $this->session->set_flashdata('success', 'Saved successfully');
            // redirect('category');
        }

        $data = $this->data;
        $data['page'] = "category/form";
        $data['rows'] = $this->ref->getAll();
        $data['content'] = "Add";
        $this->load->view('content/layout', $data);
    }

    public function edit($id)
    {
        if (!isset($id)) redirect('category');

        $category = $this->ref;
        $validation = $this->form_validation;
        $validation->set_rules($category->rules());

        if ($validation->run()) {
            $category->update();
            $this->session->set_flashdata('success', 'Saved successfully');
            // redirect('category');
        }

        $data = $this->data;

        $data['name_category'] = $category->getById($id);
        if (!$data['name_category']) show_404();

        $data['page'] = "category/form";
        $data['rows'] = $this->ref->getAll();
        $data['content'] = "Edit";
        $this->load->view('content/layout', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->ref->delete($id)) {
            redirect(site_url('category'));
        }
    }
}
