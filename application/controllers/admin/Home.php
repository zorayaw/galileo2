<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
    }

    public function index()
    {
        if ($this->session->userdata('admin_is_logged_in') == false) {
            redirect('admin');
        }
        $data['header']['title'] = 'Admin &#8213 Dashboard | Galileo';
        $data['title'] = 'Dashboard';
        $data['header']['user'] = $this->Auth_model->adminGetUserByID($this->session->userdata('admin_user_id'))->result_array();
        $data['user'] = $this->Auth_model->adminGetUserByID($this->session->userdata('admin_user_id'))->result_array();
        $this->load->view('admin/index', $data);
    }


}
