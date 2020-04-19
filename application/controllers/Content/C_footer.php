<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_footer extends CI_Controller
{
    var $data = array();

    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            redirect("content/c_login");
        }
        $this->load->model('m_footer', 'ref');
        $this->load->library('form_validation');
    }

    public function index()
    {
    }

    public function about()
    {
        $id = '1';
        $about = $this->ref;
        $validation = $this->form_validation;
        $validation->set_rules($about->rules());

        if ($validation->run()) {
            $about->updateAbout();
            $this->session->set_flashdata('success', 'Saved successfully');
            // redirect('about');
        }

        $data = $this->data;

        $data['about'] = $about->getById($id);
        if (!$data['about']) show_404();
        $data['rows'] = $this->ref->getAll();

        $data['titlepage'] = "About";
        $data['page'] = "footer/about/form";
        $data['content'] = "Edit";
        $this->load->view('content/layout', $data);
    }

    public function store()
    {
        $id = '2';
        $store = $this->ref;
        $validation = $this->form_validation;
        $validation->set_rules($store->rules());

        if ($validation->run()) {
            $store->updateStore();
            $this->session->set_flashdata('success', 'Saved successfully');
            // redirect('store');
        }

        $data = $this->data;

        $data['store'] = $store->getById($id);
        if (!$data['store']) show_404();
        $data['rows'] = $this->ref->getAll();

        $data['titlepage'] = "Our Store";
        $data['page'] = "footer/our_store/form";
        $data['content'] = "Edit";
        $this->load->view('content/layout', $data);
    }

    public function buy()
    {
        $id = '3';
        $buy = $this->ref;
        $validation = $this->form_validation;
        $validation->set_rules($buy->rules());

        if ($validation->run()) {
            $buy->updateBuy();
            $this->session->set_flashdata('success', 'Saved successfully');
            // redirect('buy');
        }

        $data = $this->data;

        $data['buy'] = $buy->getById($id);
        if (!$data['buy']) show_404();
        $data['rows'] = $this->ref->getAll();

        $data['titlepage'] = "How To Buy";
        $data['page'] = "footer/how_to_buy/form";
        $data['content'] = "Edit";
        $this->load->view('content/layout', $data);
    }

    public function social()
    {
        $data = $this->data;
        $data['titlepage'] = "Social Media";
        $data['page'] = "footer/social_media/index";
        $data['social'] = $this->ref->getSocialMedia();
        $this->load->view('content/layout', $data);
    }

    public function add()
    {
        $social = $this->ref;
        $validation = $this->form_validation;
        $validation->set_rules($social->rules());

        if ($validation->run()) {
            $social->saveSocial();
            $this->session->set_flashdata('success', 'Saved successfully');
            // redirect('social');
        }

        $data = $this->data;
        $data['titlepage'] = "Social Media";
        $data['page'] = "footer/social_media/form";
        $data['rows'] = $this->ref->getAll();
        $data['content'] = "Add";
        $this->load->view('content/layout', $data);
    }

    public function edit($id)
    {
        if (!isset($id)) redirect('social');

        $social = $this->ref;
        $validation = $this->form_validation;
        $validation->set_rules($social->rules());

        if ($validation->run()) {
            $social->updateSocial();
            $this->session->set_flashdata('success', 'Saved successfully');
            // redirect('social');
        }

        $data = $this->data;

        $data['social'] = $social->getById($id);
        if (!$data['social']) show_404();
        $data['titlepage'] = "Social Media";

        $data['page'] = "footer/social_media/form";
        $data['rows'] = $this->ref->getAll();
        $data['content'] = "Edit";
        $this->load->view('content/layout', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->ref->deleteSocial($id)) {
            redirect(site_url('social'));
        }
    }
}
