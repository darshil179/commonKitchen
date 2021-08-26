<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function Add_cart() {
        $buyer = $this->input->post('buyer');
        $product_id = $this->input->post('product_id');
        $quantity = $this->input->post('quantity');
        $price = $this->input->post('price');
        $data = array(
            'Buyer_Id' => $buyer,
            'Product_Id' => $product_id,
            'Quantity' => $quantity,
            'Total_Price' => $price,
            'Is_Active' => true,
        );
        $query = $this->db->insert('tbl_cart', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function GetCartList($buyer_id) {
        $store = "CALL GetCartList('$buyer_id')";
        $U = $this->db->query($store);
        return $U->result();
    }

}
