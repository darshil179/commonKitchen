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


//        $this->db->select('*');
//        $this->db->from('subcategory');
//        $this->db->where('Is_Active', 1);
//        $query = $this->db->get();
//        return $query->result();
    }

    public function Addsubcategory() {
        $cat_id = $this->input->post('cat_id');
        $sub_name = $this->input->post('sub_name');
        $created_on = date('Y-m-d H:i:s');
        $user = $this->session->userdata('UserId');
        $data = array(
            'Category_Id' => $cat_id,
            'Subcategory_Name' => $sub_name,
            'Created_by' => $user,
            'Created_on' => $created_on,
            'Is_Active' => true,
        );
        $query = $this->db->insert('subcategory', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function GetEdit_subcategory($sub_id) {
        $this->db->select('*');
        $this->db->from('subcategory');
        $this->db->where('Subcategory_Id', $sub_id);
        $query = $this->db->get();
        return $query->row();
    }

    public function Editsubcategory() {
        $sub_id = $this->input->post('sub_id');
        $sname = $this->input->post('sub_name');
        $cat_id = $this->input->post('cat_id');
        $created_on = date('Y-m-d H:i:s');
        $user = $this->session->userdata('UserId');
        $data = array(
            'Subcategory_Name' => $sname,
            'Category_Id' => $cat_id,
            'Updated_by' => $user,
            'Updated_on' => $created_on,
        );

        $this->db->where('Subcategory_Id', $sub_id);
        $query = $this->db->update('subcategory', $data);
//        return ($this->db->affected_rows() != 1) ? false : true;
        return $query;
    }

    public function Delete_subcategory($sub_id) {
        $created_on = date('Y-m-d H:i:s');
        $user = $this->session->userdata('UserId');
        $data = array(
            'Is_Active' => 0,
            'Updated_by' => $user,
            'Updated_on' => $created_on,
        );
        $this->db->where('Subcategory_Id', $sub_id);
        $query = $this->db->update('subcategory', $data);
        return $query;
    }

}
