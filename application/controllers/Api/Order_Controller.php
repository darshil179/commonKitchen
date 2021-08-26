<?php

require APPPATH . 'libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Order_Controller extends REST_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('Api/Order_Model', 'Order_Model');
    }

    public function Place_Order_post() {
        $Add_Order = $this->Order_Model->Add_Order();
        $this->response($Add_Order, REST_Controller::HTTP_OK);
    }

}
