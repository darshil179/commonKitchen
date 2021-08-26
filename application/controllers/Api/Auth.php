<?php

require APPPATH . 'libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Auth extends REST_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('Api/Auth_model', 'Auth_model');
    }

    public function getUserDetail_post() {
        $email = $this->input->post('Email');
        $password = $this->input->post('Password');
        $username = $this->Auth_model->getModelUserDetail_post($email, $password);
        if (!empty($username)) {
            $user_session = array(
                'UserId' => $username->UserId,
                //'FullName' => $username->FullName,
                'Email' => $username->Email,
                    // 'Password'  => $username->Password,
                    //'Image' => $username->Image,
                    // 'RoleId' => $username->RoleId,
                    //'ReferCode' => $username->ReferCode
            );
            //$this->session->set_userdata($user_session);

            $this->response($username, REST_Controller::HTTP_OK);
            return redirect(base_url() . 'dashboard');
        } else {
            return redirect(base_url() . 'sign_in');
        }
    }

    public function signUpDetail_post() {
        $this->load->model('Auth/Auth_model', 'Auth_model');
        $isExists = $this->Auth_model->checkUserExists($this->input->post('email'));
        if ($isExists) {
            $this->session->set_flashdata('email', 'You Have Registration Already Exists...!');
            return redirect(base_url() . 'register');
        } else {
            $userRecord = $this->Auth_model->signUpDetail_post();
            $this->response($userRecord, REST_Controller::HTTP_OK);
            return redirect(base_url() . 'welcome_message');
        }
    }

//FOR BUYER
    public function signUpBuyerDetail_post() {
        $this->load->model('Auth/Auth_model', 'Auth_model');
        $isExists = $this->Auth_model->checkBuyerExists($this->input->post('email'));
        if ($isExists) {
//            $this->session->set_flashdata('email', 'You Have Registration Already Exists...!');
            return redirect(base_url() . 'register');
        } else {
            $userRecorddd = $this->Auth_model->signUpBuyerDetail_post();
            $this->response($userRecorddd, REST_Controller::HTTP_OK);
            return redirect(base_url() . 'welcome_message');
        }
    }

    public function getBuyerDetail_post() {
        $email = $this->input->post('Email');
        $password = $this->input->post('Password');
        $username = $this->Auth_model->getBuyerDetail_post($email, $password);
        if (!empty($username)) {
            $user_session = array(
                'UserId' => $username->UserId,
                //'FullName' => $username->FullName,
                'Email' => $username->Email,
                    // 'Password'  => $username->Password,
                    //'Image' => $username->Image,
                    // 'RoleId' => $username->RoleId,
                    //'ReferCode' => $username->ReferCode
            );
            //$this->session->set_userdata($user_session);

            $this->response($username, REST_Controller::HTTP_OK);
            return redirect(base_url() . 'dashboard');
        } else {
            return redirect(base_url() . 'sign_in');
        }
    }

}
