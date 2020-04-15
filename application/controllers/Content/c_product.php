<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_product extends CI_Controller
{
    var $data = array();

    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            redirect("login");
        }
        $this->load->model('m_product', 'ref');
        $this->load->library('form_validation');
        $this->data = array(
            'titlepage' => 'Product'
        );
    }

    public function index()
    {
        $data = $this->data;
        $data['page'] = "product";
        $data['product'] = $this->ref->getAll();
        $this->load->view('content/template', $data);
    }

    public function add()
    {
        $product = $this->ref;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Saved successfully');
            // redirect('content/c_product', 'refresh');
        }

        $data = $this->data;
        $data['page'] = "crud_product";
        $data['content'] = "Add";
        $this->load->view('content/template', $data);
    }

    public function edit($id)
    {
        if (!isset($id)) redirect('content/c_product');

        $product = $this->ref;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Saved successfully');
            // redirect('content/c_product', 'refresh');
        }

        $data = $this->data;

        $data['product'] = $product->getById($id);
        if (!$data['product']) show_404();

        $data['page'] = "crud_product";
        $data['content'] = "Edit";
        $this->load->view('content/template', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->ref->delete($id)) {
            redirect(site_url('content/c_product'));
        }
    }
}
