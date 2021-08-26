<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function GetProductList() {

        $this->db->select('tbl_menu.Product_Id,tbl_menu.Product_Name,tbl_menu.Product_Info,tbl_menu.Price,tbl_menu.Product_Img,category.Cat_Name,category.Cat_ID,subcategory.Subcategory_Name');
        $this->db->from('tbl_menu');
        $this->db->join('category', 'tbl_menu.Cat_Id=category.Cat_ID');
        $this->db->join('subcategory', 'tbl_menu.Subcategory_Id=subcategory.Subcategory_Id');
        $this->db->where('tbl_menu.Is_Active', 1);
        $query = $this->db->get();

        return $query->result();
    }

    public function Getcategory_product($cat_id) {
        

        $this->db->select('tbl_menu.Product_Id,tbl_menu.Product_Name,tbl_menu.Product_Info,tbl_menu.Price,tbl_menu.Product_Img,category.Cat_Name,category.Cat_ID,subcategory.Subcategory_Name');
        $this->db->from('tbl_menu');
        $this->db->join('category', 'tbl_menu.Cat_Id=category.Cat_ID');
        $this->db->join('subcategory', 'tbl_menu.Subcategory_Id=subcategory.Subcategory_Id');
        $this->db->where('tbl_menu.Is_Active', 1);
        $this->db->where('category.Cat_ID', $cat_id);
        $query = $this->db->get();

        return $query->result();
    }

}
