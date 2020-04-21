<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_brand extends CI_Controller
{
    var $data = array();

    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            redirect("content/c_login");
        }
        $this->load->model('m_brand', 'ref');
        $this->load->library('form_validation');
        $this->data = array(
            'titlepage' => 'Brand'
        );
    }

    public function index()
    {
        $data = $this->data;
        $data['count'] = $this->ref->count();

        $data['page'] = "brand/index";
        $data['atribute'] = $this->ref->getAll();
        $this->load->view('content/layout', $data);
    }

    public function add()
    {
        $brand = $this->ref;
        $validation = $this->form_validation;
        $validation->set_rules($brand->rules());

        if ($validation->run()) {
            $brand->save();
            $this->session->set_flashdata('success', 'Saved successfully');
            // redirect('brand');
        }

        $data = $this->data;
        $data['atribute'] = $this->ref->getAll();
        $data['count'] = $this->ref->count();

        $data['page'] = "brand/form";
        $data['name_category'] = $this->ref->getCategory();
        $data['content'] = "Add";
        $this->load->view('content/layout', $data);
    }

    public function edit($id)
    {
        if (!isset($id)) redirect('brand');

        $brand = $this->ref;
        $validation = $this->form_validation;
        $validation->set_rules($brand->rules());

        if ($validation->run()) {
            $brand->update();
            $this->session->set_flashdata('success', 'Saved successfully');
            // redirect('brand');
        }

        $data = $this->data;
        $data['atribute'] = $this->ref->getAll();
        $data['count'] = $this->ref->count();

        $data['name_brand'] = $brand->getById($id);
        if (!$data['name_brand']) show_404();

        $data['page'] = "brand/form";
        $data['name_category'] = $this->ref->getCategory();
        $data['content'] = "Edit";
        $this->load->view('content/layout', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->ref->delete($id)) {
            redirect(site_url('brand'));
        }
    }
}
