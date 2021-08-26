<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Delivery_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
        if (!isset($this->session->userdata['UserId'])) {
            redirect(base_url() . 'welcome_message');
        }
    }

    public function Get_ChefList() {
        $this->load->model('Delivery/Delivery_Model', 'Delivery_Model');
        $data["Delivey"] = $this->Delivery_Model->Get_DeliveryList();
        $this->config->config["Pagetitle"] = 'Delivey';
        $this->load->view('Delivey/Delivey', $data);
    }

    public function Add_Delivery() {
        $this->config->config["Pagetitle"] = 'Add Delivery Person';
        $this->load->view('Delivery/Add_Delivery');
    }

    public function AddDelivery() {
        $this->load->model('Delivery/Delivery_Model', 'Delivery_Model');
        $password = $this->Delivery_Model->randomPassword();
        $add_delivery = $this->Delivery_Model->AddDelivery($password);
        if ($add_delivery) {
            return redirect(base_url() . 'usermanagement');
        } else {
            
        }
    }

    public function GetEdit_Del($del_id) {
        $this->load->model('Delivery/Delivery_Model', 'Delivery_Model');
        $data["Delivey"] = $this->Delivery_Model->GetEdit_Del($del_id);

        if ($data) {
            $this->config->config["Pagetitle"] = 'Edit Delivey';
            $this->load->view('Delivery/Edit_Delivery', $data);
        } else {
            
        }
    }

    public function Delete_Del($del_id) {
        $this->load->model('Delivery/Delivery_Model', 'Delivery_Model');
        $delete = $this->Delivery_Model->Delete_Del($del_id);
        if ($delete) {
            return redirect(base_url() . 'usermanagement');
        } else {
            
        }
    }

    public function EditDelivery() {
        $this->load->model('Delivery/Delivery_Model', 'Delivery_Model');
        $EditDelivery = $this->Delivery_Model->EditDelivery();
        if ($EditDelivery) {
            return redirect(base_url() . 'usermanagement');
        } else {
            
        }
    }

}
