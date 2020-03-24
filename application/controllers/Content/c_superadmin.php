<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_superadmin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect("content/c_login");
        } else if ($this->session->userdata('role') != 1) {
            redirect("content/c_login");
        }
        $this->load->model('m_superadmin');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "Superadmin";
        $data['page'] = "superadmin";
        $data['list'] = $this->m_superadmin->list();
        $this->load->view('content/template', $data);
    }

    public function add()
    {
        $data['title'] = "Superadmin";
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

            if ($content == "Edit") {
                $data = array(
                    'name' => $name,
                    'username' => $username,
                    'password' => $password,
                    'role' => $role,
                    'last_login' => ""
                );

                $this->m_superadmin->update($id, $data);
                redirect('content/c_superadmin');
            } else {
                $data = array(
                    'name' => $name,
                    'username' => $username,
                    'password' => sha1($password),
                    'role' => $role,
                    'last_login' => ""
                );

                $this->m_superadmin->insert($data);
                redirect('content/c_superadmin');
            }
        } else {
            $data['title'] = "Superadmin";
            $data['page'] = "crud_superadmin";
            $this->load->view('content/template', $data);
        }
    }

    public function edit($id)
    {
        $data['title'] = "Superadmin";
        $data['page'] = "crud_superadmin";
        $data['content'] = "Edit";
        $data['sql'] = $this->m_superadmin->edit($id);
        $this->load->view('content/template', $data);
    }

    public function delete($id)
    {
        $this->m_superadmin->delete($id);
        redirect('content/c_superadmin');
    }
}
