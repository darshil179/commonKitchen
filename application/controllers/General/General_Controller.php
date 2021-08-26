<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class General_Controller extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
    }
    
    public function fetch_category() {
        $json = array();
        $this->load->model('Menu/Menu_model', 'Menu_model');
        $json = $this->Menu_model->Fetch_Category($this->input->post('cat_id'));
        header('Content-Type: application/json');
        echo json_encode($json);
    }
}

