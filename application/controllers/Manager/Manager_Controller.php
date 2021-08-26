<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Manager_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
        if (!isset($this->session->userdata['UserId'])) {
            redirect(base_url() . 'welcome_message');
        }
    }

    public function Get_ManagerList() {
        $this->load->model('Manager/Manager_model', 'Manager_model');
        $data["Manager"] = $this->Manager_model->Get_ManagerList();
        $this->config->config["Pagetitle"] = 'Manager';
        $this->load->view('Manager/Manager', $data);
    }

    public function Add_Manager() {
        $this->config->config["Pagetitle"] = 'Add Manager';
        $this->load->view('Manager/Add_Manager');
    }

    public function Addmanager() {
        $this->load->model('Manager/Manager_model', 'Manager_model');
        $password = $this->Manager_model->randomPassword();
        $add_manager = $this->Manager_model->Addmanager($password);
        if ($add_manager) {
            return redirect(base_url() . 'usermanagement');
        } else {
            
        }
    }

    public function GetEdit_manager($man_id) {
        $this->load->model('Manager/Manager_model', 'Manager_model');
        $data["GetEdit_manager"] = $this->Manager_model->GetEdit_manager($man_id);
        $this->config->config["Pagetitle"] = 'Edit Manager';
        $this->load->view('Manager/Edit_Manager', $data);
    }

    public function Editmanager() {
        $this->load->model('Manager/Manager_model', 'Manager_model');
        $edit = $this->Manager_model->Editmanager();
        if ($edit) {
            return redirect(base_url() . 'usermanagement');
        } else {
            
        }
    }

    public function Delete_manager($man_id) {
        $this->load->model('Manager/Manager_model', 'Manager_model');
        $delete = $this->Manager_model->Delete_manager($man_id);
        if ($delete) {
            return redirect(base_url() . 'usermanagement');
        } else {
            
        }
    }

}
