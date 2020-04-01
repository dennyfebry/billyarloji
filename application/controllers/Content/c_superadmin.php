<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_superadmin extends CI_Controller
{
    var $data = array();

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect("content/c_login");
        } else if ($this->session->userdata('role') != 1) {
            redirect("content/c_login");
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
        $data['list'] = $this->ref->list();
        $this->load->view('content/template', $data);
    }

    public function add()
    {
        $data = $this->data;
        $data['page'] = "crud_superadmin";
        $data['content'] = "Add";
        $this->load->view('content/template', $data);
    }

    function validation()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() != false) {
            $content = $this->input->post('content');
            $id = $this->input->post('id');
            $name = $this->input->post('name');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $role = $this->input->post('role');
            $last_login = $this->input->post('last_login');

            if ($content == "Edit") {
                $data = array(
                    'name' => $name,
                    'username' => $username,
                    'password' => $password,
                    'role' => $role,
                    'last_login' => $last_login
                );

                $this->ref->update($id, $data);
                redirect('content/c_superadmin');
            } else {
                $data = array(
                    'name' => $name,
                    'username' => $username,
                    'password' => sha1($password),
                    'role' => $role,
                    'last_login' => ""
                );

                $this->ref->insert($data);
                redirect('content/c_superadmin');
            }
        } else {
            $data = $this->data;
            $data['page'] = "crud_superadmin";
            $data['content'] = "Add";
            $this->load->view('content/template', $data);
        }
    }

    public function edit($id)
    {
        $data = $this->data;
        $data['page'] = "crud_superadmin";
        $data['content'] = "Edit";
        $data['sql'] = $this->ref->edit($id);
        $this->load->view('content/template', $data);
    }

    public function delete($id)
    {
        $this->ref->delete($id);
        redirect('content/c_superadmin');
    }
}
