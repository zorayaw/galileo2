<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model');
	}

	public function index()
	{
		if ($this->session->userdata('is_logged_in') == true) {
			redirect('');
		}
		$this->load->view('website/login/login');
	}

	public function login_action()
	{
		$email_phone = $this->input->post('email_phone');
		$password = $this->input->post('password');

		$checkEmailPhone = $this->Auth_model->checkEmailPhone($email_phone)->result_array();
		if ($checkEmailPhone == null) {
			$this->session->set_flashdata('error', 'Email or phone number is not registered. Please sign up');
			redirect('Login');
		}

		$checkPassword = $this->Auth_model->checkPassword($email_phone, $password)->result_array();
		var_dump($checkPassword);
		if ($checkPassword == null) {
			$this->session->set_flashdata('error', 'Incorrect password');
			redirect('Login');
		}

		$this->session->set_userdata('is_logged_in', true);
		foreach ($checkPassword as $val) {
			$this->session->set_userdata('email', $val['user_email']);
			$this->session->set_userdata('phone', $val['user_phone']);
			$this->session->set_userdata('user_id', $val['user_id']);
		}

		redirect('');
	}

	public function register_view()
	{
		if ($this->session->userdata('is_logged_in') == true) {
			redirect('');
		}
		$this->load->view('website/login/signup');
	}

	public function Signout()
	{
		$this->session->unset_userdata('is_logged_in');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('phone');
		$this->session->unset_userdata('user_id');

		redirect('');
	}
}
