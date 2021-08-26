<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Delivery_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function Get_DeliveryList() {
        $this->db->select('*');
        $this->db->from('tbl_delivery');
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

    public function AddDelivery($password) {
        $del_name = $this->input->post('del_name');
        $del_email = $this->input->post('del_email');
        $del_mobile = $this->input->post('del_mobile');
        $del_address = $this->input->post('del_address');
        $created_on = date('Y-m-d H:i:s');
        $user = $this->session->userdata('UserId');
        $data1 = array(
            'Delivery_Name' => $del_name,
            'Delivery_Email' => $del_email,
            'Address' => $del_address,
            'Delivery_Mobile' => $del_mobile,
            'Created_By' => $user,
            'Created_On' => $created_on,
            'Is_Active' => true,
        );
        $query1 = $this->db->insert('tbl_delivery', $data1);
        $data2 = array(
            'FullName' => $del_name,
            'Email' => $del_email,
            'Address' => $del_address,
            'Mobile' => $del_mobile,
            'Password' => $password,
            'RoleId' => '6',
            'IsActive' => true,
        );
        $query2 = $this->db->insert('user_detail', $data2);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function GetEdit_Del($del_id) {
        $this->db->select('*');
        $this->db->from('tbl_delivery');
        $this->db->where('Is_Active', 1);
        $this->db->where('Delivery_Id', $del_id);
        $query = $this->db->get();
        return $query->row();
    }

    public function Delete_Del($del_id) {
        $data1 = array(
            'Is_Active' => FALSE,
        );
        $this->db->where('Delivery_Id', $del_id);
        $query = $this->db->update('tbl_delivery', $data1);
        return $query;
    }

    public function EditDelivery() {
        $del_id = $this->input->post('del_id');
        $del_name = $this->input->post('del_name');
        $del_email = $this->input->post('del_email');
        $del_mobile = $this->input->post('del_mobile');
        $del_address = $this->input->post('del_address');
        $user = $this->session->userdata('UserId');
        $created_on = date('Y-m-d H:i:s');
        $data1 = array(
            'Delivery_Name' => $del_name,
            'Delivery_Email' => $del_email,
            'Address' => $del_address,
            'Delivery_Mobile' => $del_mobile,
            'Created_By' => $user,
            'Created_On' => $created_on,
            'Is_Active' => true,
        );
        $this->db->where('Delivery_Id', $del_id);
        $query = $this->db->update('tbl_delivery', $data1);
        $data2 = array(
            'FullName' => $del_name,
            'Email' => $del_email,
            'Address' => $del_address,
            'Mobile' => $del_mobile,
            'IsActive' => true,
        );
        $this->db->where('Email', $del_email);
        $query = $this->db->update('user_detail', $data2);
        return $query;
    }

}
