<?php

require APPPATH . 'libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Product_Controller extends REST_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('Api/Product_Model', 'Product_Model');
    }

    public function GetProductList_get() {
        $this->load->model('Api/Product_Model', 'Product_Model');
        $product = $this->Product_Model->GetProductList();
        $this->response($product, REST_Controller::HTTP_OK);
    }

    public function Getcategory_product_get($cat_id) {
        $this->load->model('Api/Product_Model', 'Product_Model');
        $category_product = $this->Product_Model->Getcategory_product($cat_id);
        $this->response($category_product, REST_Controller::HTTP_OK);
    }

}
