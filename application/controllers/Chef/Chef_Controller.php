<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Chef_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
        if (!isset($this->session->userdata['UserId'])) {
            redirect(base_url() . 'welcome_message');
        }
    }

    public function Add_Chef() {
        $this->config->config["Pagetitle"] = 'Add Chef';
        $this->load->view('Chef/Add_Chef');
    }

    public function Get_ChefList() {
        $this->load->model('Chef/Chef_Model', 'Chef_Model');
        $data["chef"] = $this->Chef_Model->Get_ChefList();
        $this->config->config["Pagetitle"] = 'Chef';
        $this->load->view('Chef/Chef', $data);
    }

    public function AddChef() {
        $this->load->model('Chef/Chef_Model', 'Chef_Model');
        $password = $this->Chef_Model->randomPassword();
        $AddChef = $this->Chef_Model->AddChef($password);
        if (AddChef) {
            return redirect(base_url() . 'usermanagement');
        } else {
            
        }
    }

    public function GetEdit_Chef($chef_id) {
        $this->load->model('Chef/Chef_Model', 'Chef_Model');
        $data["Chef"] = $this->Chef_Model->GetEdit_Chef($chef_id);
        if ($data) {
            $this->config->config["Pagetitle"] = 'Chef Edit';
            $this->load->view('Chef/Chef_edit', $data);
        } else {
            
        }
    }

    public function EditChef() {
        $this->load->model('Chef/Chef_Model', 'Chef_Model');
        $edit_chef = $this->Chef_Model->EditChef();
        if ($edit_chef) {
            return redirect(base_url() . 'usermanagement');
        } else {
            
        }
    }

    public function Delete_Chef($chef_id) {
        $this->load->model('Chef/Chef_Model', 'Chef_Model');
        $delete_chef = $this->Chef_Model->Delete_Chef($chef_id);
        if ($delete_chef) {
            return redirect(base_url() . 'usermanagement');
        } else {
            
        }
    }

}
