<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Subcategory_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function GetsubcategoryList() {

        $this->db->select('subcategory.Subcategory_Id,subcategory.Subcategory_Name,category.Cat_Name');
        $this->db->from('subcategory');
        $this->db->join('category', 'subcategory.Category_Id=category.Cat_ID');
        $this->db->where('subcategory.Is_Active', 1);
        $query = $this->db->get();
        return $query->result();
    }

}
