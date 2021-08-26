<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
        if (!isset($this->session->userdata['UserId'])) {
            redirect(base_url() . 'welcome_message');
        }
    }

    public function EditCategory() {
        $cname = $this->input->post('cname');
        $upPath = './images/categoryImage/' . $cname;
        if (!is_dir($upPath)) {
            mkdir($upPath, 0777, true);
        }
        $config['upload_path'] = $upPath;
        $config['allowed_types'] = 'gif|jpg|png';

        $config['overwrite'] = TRUE;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('img')) {
            $data = $this->upload->data();
            $image = $data['file_name'];
            //$this->load->view('upload_success', $data);
        } else {
            $error = array('error' => $this->upload->display_errors());
            //$this->load->view('custom_view', $error);
        }
        $this->load->model('category/Category_model', 'Category_model');
        $catRecord = $this->Category_model->EditCategory($image);
        if($catRecord){
            return redirect(base_url() . 'category');
        }
    }

    function AddCategory() {
        $cname = $this->input->post('cname');
        $upPath = './images/categoryimage/' . $cname;
        if (!is_dir($upPath)) {
            mkdir($upPath, 0777, true);
        }
        $config['upload_path'] = $upPath;
        $config['allowed_types'] = 'gif|jpg|png';

        $config['overwrite'] = TRUE;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('img')) {
            $data = $this->upload->data();
            $image = $data['file_name'];
            //$this->load->view('upload_success', $data);
        } else {
            $error = array('error' => $this->upload->display_errors());
            //$this->load->view('custom_view', $error);
        }
        $this->load->model('category/Category_model', 'Category_model');
        $userRecord = $this->Category_model->AddCategory($image);
        if ($userRecord) {
            return redirect(base_url() . 'category');
        } else {
            
        }
    }

    function Add_category() {
        $this->config->config["Pagetitle"] = 'Add Category';
        $this->load->view('category/add_category');
    }

    function Category() {
        $this->config->config["Pagetitle"] = 'Category';
        $this->load->view('category/category');
    }

    public function Delete_category($catid) {
        $this->load->model('Category/Category_model', 'Category_model');
        $catDelete = $this->Category_model->DeleteCategory($catid);
        if ($catDelete) {
            return redirect(base_url() . 'category');
        } else {
            $this->session->set_flashdata('userData', 'Error in User Deletion.!!');
        }
        $this->config->config["Pagetitle"] = 'Category';
        $this->load->view('category/category', $data);
    }

    function GetEdit_category($catid) {
        $this->load->model('Category/Category_model', 'Category_model');
        $data["category"] = $this->Category_model->GetEditCategory($catid);
        $this->config->config["Pagetitle"] = 'Edit';
        $this->load->view('category/editcategory', $data);
    }

    public function GetCategoryList() {
        $this->load->model('category/Category_model', 'Category_model');
        $data["category_list"] = $this->Category_model->GetCategoryList();
        $this->config->config["Pagetitle"] = 'Category';
        $this->load->view('category/category', $data);
    }

}
