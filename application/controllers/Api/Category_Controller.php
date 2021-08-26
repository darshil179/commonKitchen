<?php

require APPPATH . 'libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Category_Controller extends REST_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('Api/Category_Model', 'Category_Model');
    }

    public function GetCategoryList_get() {
//        $this->load->model('Api/Category_Model', 'Category_Model');
        $category = $this->Category_Model->GetCategoryList();
        $this->response($category, REST_Controller::HTTP_OK);
    }

}
