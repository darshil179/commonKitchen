<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Subcategory_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
        if (!isset($this->session->userdata['UserId'])) {
            redirect(base_url() . 'welcome_message');
        }
    }

    public function GetsubcategoryList() {
        $this->load->model('subcategory/Subcategory_Model', 'Subcategory_Model');
        $data["subcategory_list"] = $this->Subcategory_Model->GetsubcategoryList();
        $this->config->config["Pagetitle"] = 'Sub-Category';
        $this->load->view('subcategory/subcategory', $data);
    }

    public function Add_subcategory() {
        $this->load->model('category/Category_model', 'Category_model');
        $data["category_list"] = $this->Category_model->GetCategoryList();
        $this->config->config["Pagetitle"] = 'Add Sub-Category';
        $this->load->view('subcategory/add_subcategory', $data);
    }

    public function Addsubcategory() {
        $this->load->model('subcategory/Subcategory_Model', 'Subcategory_Model');
        $Addsubcategory = $this->Subcategory_Model->Addsubcategory();
        if ($Addsubcategory) {
            return redirect(base_url() . 'subcategory');
        } else {
            
        }
    }

    public function GetEdit_subcategory($sub_id) {
        $this->load->model('subcategory/Subcategory_Model', 'Subcategory_Model');
        $data1["subcategory"] = $this->Subcategory_Model->GetEdit_subcategory($sub_id);
        $this->load->model('category/Category_model', 'Category_model');
        $data2["category_list"] = $this->Category_model->GetCategoryList();
        $data = $data1 + $data2;
        $this->config->config["Pagetitle"] = 'Edit Subcategory';
        $this->load->view('subcategory/edit_subcategory', $data);
    }

    public function Editsubcategory() {
        $this->load->model('subcategory/Subcategory_Model', 'Subcategory_Model');
        $Editsubcategory = $this->Subcategory_Model->Editsubcategory();
        if ($Editsubcategory) {
            return redirect(base_url() . 'subcategory');
        }
    }

    public function Delete_subcategory($sub_id) {
        $this->load->model('subcategory/Subcategory_Model', 'Subcategory_Model');
        $Delete_subcategory = $this->Subcategory_Model->Delete_subcategory($sub_id);
        if ($Delete_subcategory) {
            return redirect(base_url() . 'subcategory');
        }
    }

}
