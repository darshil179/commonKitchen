<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Franchise_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function GetFranchiseList() {
        $this->db->select('*');
        $this->db->from('tbl_franchise');
        $this->db->where('Is_Active', 1);
        $query = $this->db->get();
        return $query->result();
    }

    function randomPassword() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass);
    }

    public function AddFranchise($password) {
        $fname = $this->input->post('franchise_name');
        $femail = $this->input->post('franchise_email');
        $address = $this->input->post('address');
        $pincode = $this->input->post('pincode');
        $created_on = date('Y-m-d H:i:s');
        $user = $this->session->userdata('UserId');
        $data1 = array(
            'Owner_Name' => $fname,
            'Owner_Email' => $femail,
            'Address' => $address,
            'PinCode' => $pincode,
            'Created_By' => $user,
            'Created_On' => $created_on,
            'Is_Active' => true,
        );
        $query1 = $this->db->insert('tbl_franchise', $data1);
        $data2 = array(
            'FullName' => $fname,
            'Email' => $femail,
            'Address' => $address,
            'Password' => $password,
            'RoleId' => '3',
            'IsActive' => true,
        );
        $query2 = $this->db->insert('user_detail', $data2);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function GetEdit_franchise($franchise_id) {
        $this->db->select('*');
        $this->db->from('tbl_franchise');
        $this->db->where('Owner_Id', $franchise_id);
        $this->db->where('Is_Active', 1);
        $query = $this->db->get();
        return $query->row();
    }

    public function EditFranchise() {
        $f_id = $this->input->post('franchise_id');
        $fname = $this->input->post('franchise_name');
        $femail = $this->input->post('franchise_email');
        $address = $this->input->post('address');
        $pincode = $this->input->post('pincode');
        $created_on = date('Y-m-d H:i:s');
        $user = $this->session->userdata('UserId');
        $data = array(
            'Owner_Name' => $fname,
            'Owner_Email' => $femail,
            'Address' => $address,
            'PinCode' => $pincode,
            'Created_By' => $user,
            'Created_On' => $created_on,
            'Is_Active' => true,
        );
        $this->db->where('Owner_Id', $f_id);
        $query = $this->db->update('tbl_franchise', $data);
        return $query;
    }

    public function Delete_franchise($franchise_id) {
        $data = array(
            'Is_Active' => false,
        );
        $this->db->where('Owner_Id', $franchise_id);
        $query = $this->db->update('tbl_franchise', $data);
        return $query;
    }

    public function AddOrigin() {
        $owner_id = $this->input->post('owner_id');
        $pincode = $this->input->post('origins');
        $user = $this->session->userdata('UserId');
        $created_on = date('Y-m-d H:i:s');
        $data = array(
            'Pincode_Range' => $pincode,
            'Updated_By' => $user,
            'Updated_On' => $created_on,
            'Is_Active' => true,
        );
        $this->db->where('Owner_Id', $owner_id);
        $query = $this->db->update('tbl_franchise', $data);
        return $query;
    }

}
