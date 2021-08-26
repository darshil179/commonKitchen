<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Manager_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function Get_ManagerList() {
        $this->db->select('*');
        $this->db->from('tbl_manager');
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

    public function Addmanager($password) {
        $manager_name = $this->input->post('manager_name');
        $manager_email = $this->input->post('manager_email');
        $manager_mobile = $this->input->post('manager_mobile');
        $manager_address = $this->input->post('manager_address');
        $created_on = date('Y-m-d H:i:s');
        $user = $this->session->userdata('UserId');
        $data1 = array(
            'Manager_Name' => $manager_name,
            'Manager_Email' => $manager_email,
            'Mobile' => $manager_mobile,
            'Created_By' => $user,
            'Created_On' => $created_on,
            'Is_Active' => true,
        );
        $query1 = $this->db->insert('tbl_manager', $data1);
        $data2 = array(
            'FullName' => $manager_name,
            'Email' => $manager_email,
            'Address' => $manager_address,
            'Mobile' => $manager_mobile,
            'Password' => $password,
            'RoleId' => '2',
            'IsActive' => true,
        );
        $query2 = $this->db->insert('user_detail', $data2);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function GetEdit_manager($man_id) {
        $this->db->select('*');
        $this->db->from('tbl_manager');
        $this->db->where('Manager_Id', $man_id);
        $this->db->where('Is_Active', 1);
        $query = $this->db->get();
        return $query->row();
    }

    public function Editmanager() {

        $manager_name = $this->input->post('manager_name');
        $manager_id = $this->input->post('man_id');
        $manager_mobile = $this->input->post('manager_mobile');
        $manager_email = $this->input->post('manager_email');
        $created_on = date('Y-m-d H:i:s');
        $user = $this->session->userdata('UserId');
        $data1 = array(
            'FullName' => $manager_name,
            'Mobile' => $manager_mobile,
        );
//        $query1 = $this->db->insert('tbl_manager', $data1);
        $data2 = array(
            'Manager_Name' => $manager_name,
            'Manager_Email' => $manager_email,
            'Mobile' => $manager_mobile,
            'Created_By' => $user,
            'Created_On' => $created_on,
            'Is_Active' => true,
        );
        $this->db->where('Manager_Id', $manager_id);
        $query = $this->db->update('tbl_manager', $data2);
        $this->db->where('Email', $manager_email);
        $query = $this->db->update('user_detail', $data1);
        return $query;
    }

    public function Delete_manager($man_id) {
        $data1 = array(
            'Is_Active' => 0,
        );
//        $data2 = array(
//            'IsActive' => 0,
//        );
        $this->db->where('Manager_Id', $man_id);
        $query = $this->db->update('tbl_manager', $data1);
//        $this->db->where('UserId', $man_id);
//        $query = $this->db->update('user_detail', $data2);
        return $query;
    }

}
