<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
//        if (!isset($this->session->userdata['UserId'])) {
//            redirect(base_url() . 'welcome_message');
//        }
    }

    public function home() {
        $this->load->model('category/Category_model', 'Category_model');
        $data["category_list"] = $this->Category_model->GetCategoryList();
        $this->config->config["Pagetitle"] = 'Home';
        $this->load->view('frontend/home', $data);
    }

    public function menu() {
        $this->load->model('Menu/Menu_model', 'Menu_model');
        $data["Menu_list"] = $this->Menu_model->GetMenuList();
        $this->config->config["Pagetitle"] = 'Menu';
        $this->load->view('frontend/menu_frontend', $data);
    }

    public function about() {
        $this->config->config["Pagetitle"] = 'About';
        $this->load->view('frontend/about');
    }

    public function blog() {
        $this->config->config["Pagetitle"] = 'Blog';
        $this->load->view('frontend/blog-home');
    }

    public function blogdetail() {
        $this->config->config["Pagetitle"] = 'Blog';
        $this->load->view('frontend/blog-details');
    }

    public function element() {
        $this->config->config["Pagetitle"] = 'Blog';
        $this->load->view('frontend/elements');
    }

    public function contact() {
        $this->config->config["Pagetitle"] = 'Blog';
        $this->load->view('frontend/contact-us');
    }

    public function category() {
        $this->load->model('category/Category_model', 'Category_model');
        $data["category_list"] = $this->Category_model->GetCategoryList();
        $this->config->config["Pagetitle"] = 'Categories';
        $this->load->view('frontend/category_frontend', $data);
    }

    public function single_product($pro_id) {
        $this->load->model('Menu/Menu_model', 'Menu_model');
        $data1["product"] = $this->Menu_model->GetEdit_Menu($pro_id);
        $this->load->model('Frontend/Frontend_model', 'Frontend_model');
        $data2["category"] = $this->Frontend_model->Getcategory_subcategory($pro_id);
        $data = $data1 +$data2;
        $this->config->config["Pagetitle"] = 'Product';
        $this->load->view('frontend/single_product', $data);
    }

    public function single_category($cat_id) {
        $this->load->model('Frontend/Frontend_model', 'Frontend_model');
        $data1["category_product"] = $this->Frontend_model->Getcategory_product($cat_id);
        $data2["category"] = $this->Frontend_model->Getcategory($cat_id);
        $data = $data1 +$data2;
        $this->config->config["Pagetitle"] = 'Product';
        $this->load->view('frontend/single_category', $data);
    }

}
