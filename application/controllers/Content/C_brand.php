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
        $data['page'] = "brand/index";
        $data['brand'] = $this->ref->getAll();
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
        $data['page'] = "brand/form";
        $data['rows'] = $this->ref->getAll();
        $data['name_category'] = $this->ref->getCategory();
        // if (count($data['rows']) == 0) {
        //     $init = new stdClass;
        //     $data['rows'] = array($init);
        //     $init->id = '';
        // }
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

        $data['name_brand'] = $brand->getById($id);
        if (!$data['name_brand']) show_404();

        $data['page'] = "brand/form";
        $data['rows'] = $this->ref->getAll();
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
