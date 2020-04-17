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
        // $data['category'] = $this->ref->getAll();
        $this->load->view('content/layout', $data);
    }

    public function add()
    {
        $slider = $this->ref;
        $validation = $this->form_validation;
        $validation->set_rules($slider->rules());

        if ($validation->run()) {
            $slider->save();
            $this->session->set_flashdata('success', 'Saved successfully');
            // redirect('slider');
        }

        $data = $this->data;
        $data['page'] = "slider/form";
        $data['content'] = "Add";
        $this->load->view('content/layout', $data);
    }

    public function edit($id)
    {
        if (!isset($id)) redirect('content/c_slider');

        $slider = $this->ref;
        $validation = $this->form_validation;
        $validation->set_rules($slider->rules());

        if ($validation->run()) {
            $slider->update();
            $this->session->set_flashdata('success', 'Saved successfully');
            // redirect('slider');
        }

        $data = $this->data;

        $data['slider'] = $slider->getById($id);
        if (!$data['slider']) show_404();

        $data['page'] = "slider/form";
        $data['content'] = "Edit";
        $this->load->view('content/layout', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->ref->delete($id)) {
            redirect('slider');
        }
    }
}
