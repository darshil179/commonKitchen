<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Franchise_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
        if (!isset($this->session->userdata['UserId'])) {
            redirect(base_url() . 'welcome_message');
        }
    }

    public function GetFranchiseList() {
        $this->load->model('Franchise/Franchise_Model', 'Franchise_Model');
        $data["GetFranchiseList"] = $this->Franchise_Model->GetFranchiseList();
        $this->config->config["Pagetitle"] = 'Franchise';
        $this->load->view('Franchise/Franchise', $data);
    }

    public function Add_Franchise() {
        $this->config->config["Pagetitle"] = 'Add Franchise';
        $this->load->view('Franchise/Add_Franchise');
    }

    public function AddFranchise() {
        $this->load->model('Franchise/Franchise_Model', 'Franchise_Model');
        $Password = $this->Franchise_Model->randomPassword();
        $this->load->model('Franchise/Franchise_Model', 'Franchise_Model');
        $Franchise = $this->Franchise_Model->AddFranchise($Password);
        if ($Franchise) {
            return redirect(base_url() . 'franchise');
        } else {
            
        }
    }

    public function GetEdit_franchise($franchise_id) {
        $this->load->model('Franchise/Franchise_Model', 'Franchise_Model');
        $data["franchise"] = $this->Franchise_Model->GetEdit_franchise($franchise_id);
        $this->config->config["Pagetitle"] = 'Edit Franchise';
        $this->load->view('Franchise/Edit_Franchise', $data);
    }

    public function EditFranchise() {
        $this->load->model('Franchise/Franchise_Model', 'Franchise_Model');
        $fran = $this->Franchise_Model->EditFranchise();
        if ($fran) {
            return redirect(base_url() . 'franchise');
        } else {
            
        }
    }

    public function Delete_franchise($franchise_id) {
        $this->load->model('Franchise/Franchise_Model', 'Franchise_Model');
        $delete_fran = $this->Franchise_Model->Delete_franchise($franchise_id);
        if ($delete_fran) {
            return redirect(base_url() . 'franchise');
        } else {
            
        }
    }

    public function Add_Origin($franchise_id) {
        $this->config->config["Pagetitle"] = 'Add Origin';
        $this->load->model('Franchise/Franchise_Model', 'Franchise_Model');
        $data["owner"] = $this->Franchise_Model->GetEdit_franchise($franchise_id);
        $this->load->view('Franchise/Add_Origin', $data);
    }

    public function AddOrigin() {
        $this->load->model('Franchise/Franchise_Model', 'Franchise_Model');
        $origin = $this->Franchise_Model->AddOrigin();
        if ($origin) {
            return redirect(base_url() . 'franchise');
        } else {
            
        }
    }

}
