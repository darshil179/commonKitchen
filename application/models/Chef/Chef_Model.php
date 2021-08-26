<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Chef_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function Get_ChefList() {
        $this->db->select('*');
        $this->db->from('tbl_chef');
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

    public function AddChef($password) {
        $chef_name = $this->input->post('chef_name');
        $chef_email = $this->input->post('chef_email');
        $chef_mobile = $this->input->post('chef_mobile');
        $chef_address = $this->input->post('chef_address');
        $created_on = date('Y-m-d H:i:s');
        $user = $this->session->userdata('UserId');
        $data1 = array(
            'Chef_Name' => $chef_name,
            'Chef_Email' => $chef_email,
            'Chef_Mobile' => $chef_mobile,
            'Created_By' => $user,
            'Created_On' => $created_on,
            'Is_Active' => true,
        );
        $query1 = $this->db->insert('tbl_chef', $data1);
        $data2 = array(
            'FullName' => $chef_name,
            'Email' => $chef_email,
//            'Address' => $chef_address,
            'Mobile' => $chef_mobile,
            'Password' => $password,
            'RoleId' => '5',
            'IsActive' => true,
        );
        $query2 = $this->db->insert('user_detail', $data2);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function GetEdit_Chef($chef_id) {
        $this->db->select('*');
        $this->db->from('tbl_chef');
        $this->db->where('Is_Active', 1);
        $this->db->where('Chef_Id', $chef_id);
        $query = $this->db->get();
        return $query->row();
    }

    public function EditChef() {
        $chef_id = $this->input->post('chef_id');
        $chef_name = $this->input->post('chef_name');
        $chef_email = $this->input->post('chef_email');
        $chef_mobile = $this->input->post('chef_mobile');
        $created_on = date('Y-m-d H:i:s');
        $user = $this->session->userdata('UserId');
        $data1 = array(
            'Chef_Name' => $chef_name,
            'Chef_Email' => $chef_email,
            'Chef_Mobile' => $chef_mobile,
            'Created_By' => $user,
            'Created_On' => $created_on,
            'Is_Active' => true,
        );
        $this->db->where('Chef_Id', $chef_id);
        $query = $this->db->update('tbl_chef', $data1);
        return $query;
    }

    public function Delete_Chef($chef_id) {
        $data1 = array(
            'Is_Active' => FALSE,
        );
        $this->db->where('Chef_Id', $chef_id);
        $query = $this->db->update('tbl_chef', $data1);
        return $query;
    }

}
