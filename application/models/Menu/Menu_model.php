<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function GetMenuList() {

        $this->db->select('tbl_menu.Product_Id,tbl_menu.Product_Name,tbl_menu.Product_Info,tbl_menu.Price,tbl_menu.Product_Img,category.Cat_Name,category.Cat_ID,subcategory.Subcategory_Name');
        $this->db->from('tbl_menu');
        $this->db->join('category', 'tbl_menu.Cat_Id=category.Cat_ID');
        $this->db->join('subcategory', 'tbl_menu.Subcategory_Id=subcategory.Subcategory_Id');
        $this->db->where('tbl_menu.Is_Active', 1);
        $query = $this->db->get();

        return $query->result();
    }

    public function Addproduct($image) {
        $cat_id = $this->input->post('cat_id');
        $sub_id = $this->input->post('sub_id');
        $pname = $this->input->post('pname');
        $info = $this->input->post('info');
        $price = $this->input->post('price');
        $created_on = date('Y-m-d H:i:s');
        $user = $this->session->userdata('UserId');

        $data = array(
            'Cat_Id' => $cat_id,
            'Subcategory_Id' => $sub_id,
            'Product_Name' => $pname,
            'Product_Info' => $info,
            'Price' => $price,
            'Created_On' => $created_on,
            'Created_By' => $user,
            'Product_Img' => $image,
            'Is_Active' => true,
        );
        $query = $this->db->insert('tbl_menu', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function GetEdit_Menu($pro_id) {
        $this->db->select('*');
        $this->db->from('tbl_menu');
        $this->db->where('Product_Id', $pro_id);
        $query = $this->db->get();
        return $query->row();
    }

    public function Edit_Menu($image) {
        $pro_id = $this->input->post('pro_id');
        $cat_id = $this->input->post('cat_id');
        $sub_id = $this->input->post('sub_id');
        $pname = $this->input->post('pname');
        $info = $this->input->post('info');
        $price = $this->input->post('price');
        $created_on = date('Y-m-d H:i:s');
        $user = $this->session->userdata('UserId');
        if (empty($image)) {
            $data = array(
                'Cat_Id' => $cat_id,
                'Subcategory_Id' => $sub_id,
                'Product_Name' => $pname,
                'Product_Info' => $info,
                'Price' => $price,
                'Updated_by' => $user,
                'Updated_on' => $created_on,
                'Is_Active' => true,
            );
        } else {
            $data = array(
                'Cat_Id' => $cat_id,
                'Subcategory_Id' => $sub_id,
                'Product_Name' => $pname,
                'Product_Info' => $info,
                'Price' => $price,
                'Created_On' => $created_on,
                'Product_Img' => $image,
                'Is_Active' => true,
            );
        }

        $this->db->where('Product_Id', $pro_id);
        $query = $this->db->update('tbl_menu', $data);
        return $query;
    }

    public function Delete_Menu($pro_id) {
        $data = array(
            'Is_Active' => 0
        );
        $this->db->where('Product_Id', $pro_id);
        $query = $this->db->update('tbl_menu', $data);
        return $query;
    }

    public function Fetch_Category($cat_id) {
//        $cat_id = $this->input->post('cat_id');
        $this->db->select('*');
        $this->db->from('subcategory');
        $this->db->where('Category_Id', $cat_id);
        $query = $this->db->get();
        return $query->result();
    }

    public function GetSubcategoryProducts($sub_id) {
        
    }

}
