<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Items extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->model('Items_model');
    }

    public function index()
    {
        if ($this->session->userdata('admin_is_logged_in') == false) {
            redirect('admin');
        }
        $data['header']['title'] = 'Admin &#8213 Items | Galileo';
        $data['title'] = 'Items';
        $data['header']['user'] = $this->Auth_model->adminGetUserByID($this->session->userdata('admin_user_id'))->result_array();
        $data['user'] = $this->Auth_model->adminGetUserByID($this->session->userdata('admin_user_id'))->result_array();
        $data['items'] = $this->Items_model->getAllItems()->result_array();
        
        $this->load->view('admin/items', $data);
    }
    
    public function addStock()
    {
        if ($this->session->userdata('admin_is_logged_in') == false) {
            redirect('admin');
        }

        $stock_id = $this->input->post('stock_id');
        $amount = $this->input->post('amount');
        $admin_id = $this->session->userdata('admin_user_id');

        $updateStock = $this->Items_model->updateStock($stock_id, $amount);
        $insertStock = $this->Items_model->insertStockIncomeHistory($stock_id, $admin_id, $amount);
        
        if($updateStock == true & $insertStock == true){
            $this->session->set_flashdata('success', 'Stock has been updated Successfully');
        }

        redirect('admin/Items');
    }

    

}
