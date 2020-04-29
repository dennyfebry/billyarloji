<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Website extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_category', 'ctg');
		$this->load->model('m_brand', 'brn');
		$this->load->model('m_testimoni', 'tes');
		$this->load->model('m_slider', 'sli');
		$this->load->model('m_footer', 'foo');
		$this->load->model('m_product', 'prd');
	}

	public function index()
	{
		$data['testimoni'] = $this->tes->getAll();
		$data['slider'] = $this->sli->getSlider();
		$data['about'] = $this->foo->getById(1);
		$data['store'] = $this->foo->getById(2);
		$data['buy'] = $this->foo->getById(3);
		$data['social'] = $this->foo->getAll();
		$data['titlepage'] = "Home";
		$data['page'] = "home";
		$this->load->view('user/template', $data);
	}
}
