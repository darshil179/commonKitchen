<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function GetCategoryList() {

        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('Is_Active', 1);
        $query = $this->db->get();
        return $query->result();
    }

}
