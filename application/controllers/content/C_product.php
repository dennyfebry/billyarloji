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
        $data                   = $this->data;
        $data['count']          = $this->ref->count();

        $data['page']           = "product/index";
        $data['atribute']       = $this->ref->getAll();
        $this->load->view('content/layout', $data);
    }

    public function add()
    {
        $product                = $this->ref;
        $validation             = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Saved successfully');
            redirect('list_product');
        }

        $data = $this->data;
        $data['atribute']       = $this->ref->getAll();
        $data['count']          = $this->ref->count();

        $data['page']           = "product/form";
        $data['name_category']  = $this->ref->getCategory();
        $data['name_brand']     = $this->ref->getBrands();
        $data['content']        = "Add";
        $this->load->view('content/layout', $data);
    }

    public function edit($id)
    {
        if (!isset($id)) redirect('product');

        $product                = $this->ref;
        $validation             = $this->form_validation;
        $validation->set_rules($product->rules());
        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Saved successfully');
            redirect('list_product');
        }

        $data                   = $this->data;
        $data['atribute']       = $this->ref->getAll();
        $data['count']          = $this->ref->count();

        $data['product']        = $product->getById($id);
        if (!$data['product']) show_404();

        $data['page']           = "product/form";
        $data['name_category']  = $this->ref->getCategory();
        $data['name_brand']     = $this->ref->getBrands();
        $data['content']        = "Edit";
        $this->load->view('content/layout', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->ref->delete($id)) {
            redirect(site_url('list_product'));
        }
    }

    function getBrand()
    {
        $name_category          = $this->input->post('name_category');
        $getBrand               = $this->ref->getBrand($name_category)->result();
        echo json_encode($getBrand);
    }
}
