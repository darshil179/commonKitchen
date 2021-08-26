<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
        if (!isset($this->session->userdata['UserId'])) {
            redirect(base_url() . 'welcome_message');
        }
    }

    function Menu() {
        $this->config->config["Pagetitle"] = 'Menu';
        $this->load->view('menu/menu');
    }

    public function GetMenuList() {
        $this->load->model('Menu/Menu_model', 'Menu_model');
        $data["Menu_list"] = $this->Menu_model->GetMenuList();
        $this->config->config["Pagetitle"] = 'Menu';
        $this->load->view('menu/Menu', $data);
    }

    public function Add_product() {
        $this->load->model('category/Category_model', 'Category_model');
        $data1["category_list"] = $this->Category_model->GetCategoryList();
        $this->load->model('subcategory/Subcategory_Model', 'Subcategory_Model');
        $data2["subcategory_list"] = $this->Subcategory_Model->GetsubcategoryList();
        $data = $data1 + $data2;
        $this->config->config["Pagetitle"] = 'Add Product';
        $this->load->view('menu/add_product', $data);
    }

    public function Addproduct() {
        $pname = $this->input->post('pname');
        $upPath = './images/productImage/' . $pname;
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
        $this->load->model('Menu/Menu_model', 'Menu_model');
        $productRecord = $this->Menu_model->Addproduct($image);
        if ($productRecord) {
            return redirect(base_url() . 'menu');
        } else {
            
        }
    }

    public function GetEdit_menu($pro_id) {
        $this->load->model('Menu/Menu_model', 'Menu_model');
        $data1["menu"] = $this->Menu_model->GetEdit_Menu($pro_id);
        $this->load->model('category/Category_model', 'Category_model');
        $data2["category_list"] = $this->Category_model->GetCategoryList();
        $this->load->model('subcategory/Subcategory_Model', 'Subcategory_Model');
        $data3["subcategory_list"] = $this->Subcategory_Model->GetsubcategoryList();
        $this->config->config["Pagetitle"] = 'Edit Product';
        $data = $data1 + $data2 + $data3;
        $this->load->view('menu/editmenu', $data);
    }

    public function Delete_menu($pro_id) {
        $this->load->model('Menu/Menu_model', 'Menu_model');
        $delete = $this->Menu_model->Delete_Menu($pro_id);
        if ($delete) {
            return redirect(base_url() . 'menu');
        }
    }

    public function Edit_product() {
        $pname = $this->input->post('pname');
        $upPath = './images/productImage/' . $pname;
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
//        $data = $this->upload->data();
//        $image = $data['file_name'];
        $this->load->model('Menu/Menu_model', 'Menu_model');
        $menuload = $this->Menu_model->Edit_Menu($image);
        if ($menuload) {
            return redirect(base_url() . 'menu');
        }
    }

}
