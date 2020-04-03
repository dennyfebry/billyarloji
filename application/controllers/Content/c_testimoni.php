<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_testimoni extends CI_Controller
{
    var $data = array();

    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            redirect("content/c_login");
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
        $data['page'] = "testimoni";
        $data['list'] = $this->ref->list();
        $this->load->view('content/template', $data);
    }

    public function add()
    {
        $data = $this->data;
        $data['page'] = "crud_testimoni";
        $data['content'] = "Add";
        $this->load->view('content/template', $data);
    }

    function validation()
    {
        $this->form_validation->set_rules('title', 'Title', 'required');
        // $this->form_validation->set_rules('description', 'description', 'required');

        if ($this->form_validation->run() != false) {
            $content = $this->input->post('content');
            $id = $this->input->post('id');
            $created_date = $this->input->post('created_date');
            $created_by = $this->input->post('created_by');
            $updated_date = $this->input->post('updated_date');
            $updated_by = $this->input->post('updated_by');
            $title = $this->input->post('title');
            $description = $this->input->post('description');

            if ($content == "Edit") {
                $data = array(
                    'updated_date' => $updated_date,
                    'updated_by' => $updated_by,
                    'title' => $title,
                    'description' => $description
                );

                $this->ref->update($id, $data);
                redirect('content/c_testimoni');
            } else {
                $data = array(
                    'created_date' => $created_date,
                    'created_by' => $created_by,
                    'updated_date' => $updated_date,
                    'updated_by' => $updated_by,
                    'title' => $title,
                    'description' => $description
                );

                $this->ref->insert($data);
                redirect('content/c_testimoni');
            }
        } else {
            $data = $this->data;
            $data['page'] = "crud_testimoni";
            $data['content'] = "Add";
            $this->load->view('content/template', $data);
        }
    }

    public function edit($id)
    {
        $data = $this->data;
        $data['page'] = "crud_testimoni";
        $data['content'] = "Edit";
        $data['sql'] = $this->ref->edit($id);
        $this->load->view('content/template', $data);
    }

    public function delete($id)
    {
        $this->ref->delete($id);
        redirect('content/c_testimoni');
    }
}
