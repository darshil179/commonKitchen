<?php

require APPPATH . 'libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Subcategory_Controller extends REST_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('Api/Subcategory_Model', 'Subcategory_Model');
    }

    public function GetsubcategoryList_get() {
        $this->load->model('Api/Subcategory_Model', 'Subcategory_Model');
        $subcategory_list = $this->Subcategory_Model->GetsubcategoryList();
        $this->response($subcategory_list, REST_Controller::HTTP_OK);
    }

}
