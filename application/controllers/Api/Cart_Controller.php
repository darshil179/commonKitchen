<?php

require APPPATH . 'libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Cart_Controller extends REST_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('Api/Cart_Model', 'Cart_Model');
    }

    public function Add_cart_post() {
        $cart = $this->Cart_Model->Add_cart();
        $this->response($cart, REST_Controller::HTTP_OK);
    }

    public function GetCartList_get($buyer_id) {
        $cartlist = $this->Cart_Model->GetCartList($buyer_id);
        $this->response($cartlist, REST_Controller::HTTP_OK);
    }

}
