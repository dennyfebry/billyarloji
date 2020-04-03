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
        $data['list'] = $this->ref->list();
        $this->load->view('content/template', $data);
    }

    public function add()
    {
        $data = $this->data;
        $data['page'] = "crud_slider";
        $data['content'] = "Add";
        $this->load->view('content/template', $data);
    }

    function validation()
    {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() != false) {
            $content = $this->input->post('content');
            $id = $this->input->post('id');
            $title = $this->input->post('title');
            $description = $this->input->post('description');
            $status = $this->input->post('status');
            $updated_date = $this->input->post('updated_date');
            $updated_by = $this->input->post('updated_by');

            if ($content == "Edit") {
                $data = array(
                    'title' => $title,
                    'description' => $description,
                    'status' => $status,
                    'updated_date' => $updated_date,
                    'updated_by' => $updated_by
                );

                $this->ref->update($id, $data);
                redirect('content/c_slider');
            } else {
                $data = array(
                    'title' => $title,
                    'description' => $description,
                    'status' => $status,
                    'updated_date' => $updated_date,
                    'updated_by' => $updated_by
                );

                $this->ref->insert($data);
                redirect('content/c_slider');
            }
        } else {
            $data = $this->data;
            $data['page'] = "crud_slider";
            $data['content'] = "Add";
            $this->load->view('content/template', $data);
        }
    }

    public function edit($id)
    {
        $data = $this->data;
        $data['page'] = "crud_slider";
        $data['content'] = "Edit";
        $data['sql'] = $this->ref->edit($id);
        $this->load->view('content/template', $data);
    }

    public function delete($id)
    {
        $this->ref->delete($id);
        redirect('content/c_slider');
    }
}
