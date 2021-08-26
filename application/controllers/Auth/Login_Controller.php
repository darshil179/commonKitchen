<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation', 'user_agent'));
        $this->load->database();
        $this->load->model('Auth/SignIn_model', 'SignIn_model');
    }

    public function getUserDetail() {
        $data['Email'] = $this->input->POST('email');
        $data['Password'] = $this->input->POST('password');
        $username = $this->SignIn_model->getModelUserDetail($data['Email'], $data['Password']);

        if (!empty($username)) {
            $user_session = array(
                'UserId' => $username->UserId,
                'FullName' => $username->FullName,
                'Email' => $username->Email,
                'Image' => $username->Image,
                'RoleId' => $username->RoleId,
                'ReferCode' => $username->ReferCode
            );
            $this->session->set_userdata($user_session);
            return redirect(base_url() . 'dashboard');
        } else {
            return redirect(base_url() . 'sign_in');
        }
    }

    function Dashboard() {
        if (!isset($this->session->userdata['UserId'])) {
            redirect(base_url() . 'welcome_message');
        }
        $this->load->model('Package/Package_model', 'Package_model');
        $data["package_list"] = $this->Package_model->GetPackageList();
        $this->config->config["Pagetitle"] = 'Dashboard';
        $this->load->view('dashboard');
    }

    function Signin() {
        $this->config->config["Pagetitle"] = 'LogIn';
        $this->load->view('welcome_message');
    }

    function logout() {
        $newdata = array(
            'FullName' => '',
            'Email' => '',
            'UserId' => FALSE,
        );

        $this->session->unset_userdata($newdata);
        $this->session->sess_destroy();

        redirect(base_url() . 'welcome_message');
    }

    function Register() {
        $this->config->config["Pagetitle"] = 'Registration';
        $this->load->view('Auth/signup');
    }

    function Category() {
        $this->config->config["Pagetitle"] = 'Category';
        $this->load->view('category');
    }

    public function signUpDetail() {
        $this->load->model('Auth/SignIn_model', 'SignIn_model');
        $isExists = $this->SignIn_model->checkUserExists($this->input->post('email'));
        if ($isExists) {
            $this->session->set_flashdata('email', 'You Have Registration Already Exists...!');
            return redirect(base_url() . 'register');
        } else {
            $userRecord = $this->SignIn_model->signUpDetail();
            return redirect(base_url() . 'welcome_message');
        }
    }

}

?>