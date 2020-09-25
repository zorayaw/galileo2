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
        if ($this->session->userdata('admin_is_logged_in') == true) {
            redirect('admin/Home');
        }
        $data['title'] = 'Admin | Galileo';
        $this->load->view('admin/login/login', $data);
    }

    public function login_action()
    {
        $email_username = $this->input->post('email_username');
        $password = $this->input->post('password');


        $checkEmailUsername = $this->Auth_model->admincheckEmailUsername($email_username)->result_array();
        if ($checkEmailUsername == null) {
            $this->session->set_flashdata('error', 'Email or username is not registered.');
            redirect('admin');
        }


        $checkPassword = $this->Auth_model->adminCheckPassword($email_username, $password)->result_array();
        if ($checkPassword == null) {
            $this->session->set_flashdata('error', 'Incorrect password');
            redirect('admin');
        }

        $this->session->set_userdata('admin_is_logged_in', true);
        foreach ($checkPassword as $val) {
            $this->session->set_userdata('admin_email', $val['user_email']);
            $this->session->set_userdata('admin_username', $val['user_username']);
            $this->session->set_userdata('admin_user_id', $val['user_id']);
        }

        $this->session->set_flashdata('login', 'Tes');
        redirect('admin/Home');
    }


    public function Signout()
    {
        $this->session->unset_userdata('admin_is_logged_in');
        $this->session->unset_userdata('admin_email');
        $this->session->unset_userdata('admin_username');
        $this->session->unset_userdata('admin_user_id');

        $this->session->set_flashdata('logout', 'Logout successful.');
        redirect('admin');
    }
}
