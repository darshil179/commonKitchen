<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SignIn_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getModelUserDetail($email, $password) {
        $array = array('Email' => $email, 'Password' => $password);
        $this->db->select('*');
        $this->db->from('user_detail');
        $this->db->where($array);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->row();
            //$this->load->view('dashboard');
        } else {
            return FALSE;
        }
    }

    public function checkUserExists($email) {
        $array = array('Email' => $email);
        $this->db->select('*');
        $this->db->from('user_detail');
        $this->db->where($array);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {

            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function signUpDetail() {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('pass');
        $contact = $this->input->post('contact');
//        $country = 101;
        $address = $this->input->post('address');
        $data = array(
            'FullName' => $name,
            'Email' => $email,
            'Mobile' => $contact,
            'Password' => $password,
            'RoleId' => 2,
            'IsActive' => true,
            'Address' => $address,
        );
        $query = $this->db->insert('user_detail', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
//        $city = $this->input->post('city');
    }

}
