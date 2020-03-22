<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('content/login');
	}

	function validation()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() != false) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$login = array(
				'username' => $username,
				'password' => sha1($password)
			);

			$array = $this->m_login->check_login("tb_admin", $login)->result();
			$check = $this->m_login->check_login("tb_admin", $login)->num_rows();

			if ($check > 0) {
				date_default_timezone_set("Asia/Jakarta");
				$date = date("Y-m-d H:i:s");

				$where = array(
					'id' => $array[0]->id
				);

				$data = array(
					'last_login' => $date
				);
				$this->m_login->last_login("tb_admin", $where, $data);

				$data_session = array(
					'id' => $array[0]->id,
					'name' => $array[0]->name,
					'role' => $array[0]->role,
					'status' => "login"
				);

				$this->session->set_userdata($data_session);

				redirect(base_url("index.php/content/c_dashboard"));
			} else {
				$error = array(
					'error_message' => 'Invalid Username or Password'
				);
				$this->load->view('content/login', $error);
			}
		} else {
			$this->load->view('content/login');
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('content/c_login');
	}
}
