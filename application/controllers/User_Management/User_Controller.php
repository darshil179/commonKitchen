<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
        if (!isset($this->session->userdata['UserId'])) {
            redirect(base_url() . 'welcome_message');
        }
    }

    public function User_Management() {
        $this->load->model('Franchise/Franchise_Model', 'Franchise_Model');
        $data1["GetFranchiseList"] = $this->Franchise_Model->GetFranchiseList();
        $this->load->model('Manager/Manager_model', 'Manager_model');
        $data2["Manager"] = $this->Manager_model->Get_ManagerList();
        $this->load->model('Chef/Chef_Model', 'Chef_Model');
        $data3["Chef"] = $this->Chef_Model->Get_ChefList();
        $this->load->model('Delivery/Delivery_Model', 'Delivery_Model');
        $data4["Delivey"] = $this->Delivery_Model->Get_DeliveryList();
        $data = $data1 + $data2 + $data3 + $data4;
        $this->config->config["Pagetitle"] = 'User Management';
        $this->load->view('User_Management/User_Management', $data);
    }

}
