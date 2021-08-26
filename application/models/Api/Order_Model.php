<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Order_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function Add_Order() {
        $buyer = $this->input->post('buyer');
        $cart_id = $this->input->post('cart');
        $address = $this->input->post('address');
        $data = array(
            'Buyer_Id' => $buyer,
            'Cart_Id' => $cart_id,
            'Address_Id' => $address,
            'Is_Active' => true,
        );
        $query = $this->db->insert('tbl_order', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

}
