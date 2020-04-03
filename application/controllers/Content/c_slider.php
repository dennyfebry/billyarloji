<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_slider extends CI_Controller
{
    var $data = array();

    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            redirect("content/c_login");
        }
        $this->load->model('m_slider', 'ref');
        $this->load->library('form_validation');
        $this->data = array(
            'titlepage' => 'Slider'
        );
    }

    public function index()
    {
        $data = $this->data;
        $data['page'] = "slider";
        $data['slider'] = $this->ref->getAll();
        $this->load->view('content/template', $data);
    }

    public function add()
    {
        $slider = $this->ref;
        $validation = $this->form_validation;
        $validation->set_rules($slider->rules());

        if ($validation->run()) {
            $slider->save();
            $this->session->set_flashdata('success', 'Saved successfully');
            // redirect('content/c_slider', 'refresh');
        }

        $data = $this->data;
        $data['page'] = "crud_slider";
        $data['content'] = "Add";
        $this->load->view('content/template', $data);
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
            // redirect('content/c_slider', 'refresh');
        }

        $data = $this->data;

        $data['slider'] = $slider->getById($id);
        if (!$data['slider']) show_404();

        $data['page'] = "crud_slider";
        $data['content'] = "Edit";
        $this->load->view('content/template', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->ref->delete($id)) {
            redirect(site_url('content/c_slider'));
        }
    }
}
