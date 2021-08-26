<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function GetEditCategory($catid) {
        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('Cat_ID', $catid);
        $query = $this->db->get();
        return $query->row();
    }

    public function EditCategory($image) {
        $name = $this->input->post('cname');
        $cdescription = $this->input->post('cdescription');
        $cat_id = $this->input->post('cat_id');
        $created_on = date('Y-m-d H:i:s');
        $user = $this->session->userdata('UserId');
        if (empty($image)) {
            $data = array(
                'Cat_Description' => $cdescription,
                'Cat_Name' => $name,
                'Updated_by' => $user,
                'Updated_on' => $created_on,
            );
        } else {
            $data = array(
                'Cat_Description' => $cdescription,
                'Cat_Image' => $image,
                'Cat_Name' => $name,
                'Updated_by' => $user,
                'Updated_on' => $created_on,
            );
        }

        $this->db->where('Cat_ID', $cat_id);
        $query = $this->db->update('category', $data);
//        return ($this->db->affected_rows() != 1) ? false : true;
        return $query;


//        $this->db->update('employee_master', $data, array('emp_ID' => 1));
    }

    public function DeleteCategory($catid) {
        $data = array(
            'Is_Active' => 0
        );
        $this->db->where('Cat_ID', $catid);
        $query = $this->db->update('category', $data);
        return $query;
    }

    public function GetCategoryList() {

        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('Is_Active', 1);
        $query = $this->db->get();
//
//        $query = $this->db->get('category');
        //$R = $this->db->select('*')->from('category')->where('Is_Active', 1)->get();
        return $query->result();
    }

    public function AddCategory($image) {
        $name = $this->input->post('cname');
        $cdescription = $this->input->post('cdescription');
        $created_on = date('Y-m-d H:i:s');
        $user = $this->session->userdata('UserId');
        $data = array(
            'Cat_Name' => $name,
            'Cat_Description' => $cdescription,
            'Cat_Image' => $image,
            'Created_by' => $user,
            'Created_on' => $created_on,
            'Is_Active' => true,
        );
        $query = $this->db->insert('category', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

}
