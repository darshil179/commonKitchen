<?php

defined('BASEPATH') OR exit('No direct script access allowed');
$autoload['helper'] = array('url');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
//        $this->config->config["Pagetitle"] = 'Common';
//        $this->load->view('frontend/home');
        $this->load->model('category/Category_model', 'Category_model');
        $data["category_list"] = $this->Category_model->GetCategoryList();
        $this->config->config["Pagetitle"] = 'Home';
        $this->load->view('frontend/home', $data);
    }

}
