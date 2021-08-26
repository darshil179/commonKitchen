<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Package_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
        if (!isset($this->session->userdata['UserId'])) {
            redirect(base_url() . 'welcome_message');
        }
    }

    function Package() {
        $this->config->config["Pagetitle"] = 'Category';
        $this->load->view('category/category');
    }

    public function GetPackageList() {
        $this->load->model('Package/Package_model', 'Package_model');
        $data["package_list"] = $this->Package_model->GetPackageList();
        $this->config->config["Pagetitle"] = 'Package List';
        $this->load->view('Package/package', $data);
    }

    public function Add_package() {
        $this->load->model('Package/Package_model', 'Package_model');
        $data["Package_Item"] = $this->Package_model->GetPackageItem();
        $this->config->config["Pagetitle"] = 'Add Package';
        $this->load->view('Package/add_package', $data);
    }

    public function Delete_package($pac_id) {
        $this->load->model('Package/Package_model', 'Package_model');
        $delete = $this->Package_model->DeletePackage($pac_id);
        if ($delete) {
            return redirect(base_url() . 'package');
        } else {
            $this->session->set_flashdata('userData', 'Error in User Deletion.!!');
        }
    }

    public function GetPackageItem() {
        $this->load->model('Package/Package_model', 'Package_model');
        $data["Package_Item"] = $this->Package_model->GetPackageItem();
        $this->config->config["Pagetitle"] = 'Package Item';
        $this->load->view('Package/package_item', $data);
    }

    public function Add_Item() {
        $this->config->config["Pagetitle"] = 'Add Item';
        $this->load->view('Package/add_item');
    }

    public function AddPackage() {
        $pname = $this->input->post('pname');
        $upPath = './images/packageImage/' . $pname;
        if (!is_dir($upPath)) {
            mkdir($upPath, 0777, true);
        }
        $config['upload_path'] = $upPath;
        $config['allowed_types'] = 'gif|jpg|png';

        $config['overwrite'] = TRUE;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('pimg')) {
            $data = $this->upload->data();
            $image = $data['file_name'];
            //$this->load->view('upload_success', $data);
        } else {
            $error = array('error' => $this->upload->display_errors());
            //$this->load->view('custom_view', $error);
        }
        $this->load->model('Package/Package_model', 'Package_model');
        $packageRecord = $this->Package_model->AddPackage($image);
        if ($packageRecord) {
            return redirect(base_url() . 'package');
        } else {
            
        }
    }

    public function Additem() {
        $iname = $this->input->post('iname');
        $upPath = './images/packageitemImage/' . $iname;
        if (!is_dir($upPath)) {
            mkdir($upPath, 0777, true);
        }
        $config['upload_path'] = $upPath;
        $config['allowed_types'] = 'gif|jpg|png';

        $config['overwrite'] = TRUE;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('item_img')) {
            $data = $this->upload->data();
            $image = $data['file_name'];
            //$this->load->view('upload_success', $data);
        } else {
            $error = array('error' => $this->upload->display_errors());
            //$this->load->view('custom_view', $error);
        }
        $this->load->model('Package/Package_model', 'Package_model');
        $productRecord = $this->Package_model->Additem($image);
        if ($productRecord) {
            return redirect(base_url() . 'package_item');
        } else {
            
        }
    }

    public function GetItem_Edit($item_id) {
        $this->load->model('Package/Package_model', 'Package_model');
        $data["Item_edit"] = $this->Package_model->GetItem_Edit($item_id);
        $this->config->config["Pagetitle"] = 'Edit Item';
        $this->load->view('Package/edit_item', $data);
    }

    public function Edit_item() {
        $iname = $this->input->post('iname');
        $upPath = './images/packageitemImage/' . $iname;
        if (!is_dir($upPath)) {
            mkdir($upPath, 0777, true);
        }
        $config['upload_path'] = $upPath;
        $config['allowed_types'] = 'gif|jpg|png';

        $config['overwrite'] = TRUE;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('item_img')) {
            $data = $this->upload->data();
            $image = $data['file_name'];
            //$this->load->view('upload_success', $data);
        } else {
            $error = array('error' => $this->upload->display_errors());
            //$this->load->view('custom_view', $error);
        }
//        $data = $this->upload->data();
//        $image = $data['file_name'];
        $this->load->model('Package/Package_model', 'Package_model');
        $itemload = $this->Package_model->Edit_item($image);
        if ($itemload) {
            return redirect(base_url() . 'package_item');
        }
    }

    public function Item_Delete($item_id) {
        $this->load->model('Package/Package_model', 'Package_model');
        $delete = $this->Package_model->Item_Delete($item_id);
        if ($delete) {
            return redirect(base_url() . 'package_item');
        } else {
            $this->session->set_flashdata('userData', 'Error in User Deletion.!!');
        }
        $this->config->config["Pagetitle"] = 'Package Item';
        $this->load->view('Package/package_item');
    }

    public function package_restriction() {
        $this->load->model('Package/Package_model', 'Package_model');
        $data["package_restriction"] = $this->Package_model->package_restriction();
        $this->config->config["Pagetitle"] = 'Package Restriction';
        $this->load->view('Package/package_restriction', $data);
    }

    public function add_package_restriction() {
        $this->config->config["Pagetitle"] = 'Add Package Restriction';
        $this->load->model('Package/Package_model', 'Package_model');
        $data1["package_list"] = $this->Package_model->GetPackageList();
        $this->db->reconnect();
        $data2["Get_cat_sub_name"] = $this->Package_model->GetCategoryAndSubCategory();
        $this->db->reconnect();
        $data = $data1 + $data2;
        $this->load->view('Package/add_package_restriction', $data);
    }

//    public function AddPackageRestriction() {
//        $this->load->model('Package/Package_model', 'Package_model');
//        $u = $this->Package_model->GetCategoryAndSubCategory();
//        $AllData = $u;
//        $this->db->reconnect();
//        $this->load->controller('Package/Package_Controller/AddPackageRestrictions', $AllData);
//    }

    public function AddPackageRestriction() {
        $this->load->model('Package/Package_model', 'Package_model');
        $u = $this->Package_model->GetCategoryAndSubCategory();
        $package_id = $this->input->post('package_id');
        $created_on = date('Y-m-d H:i:s');
        $user = $this->session->userdata('UserId');
//        $AddPackageRestriction = 0;
        foreach ($u as $row) :
            //$this->db->reconnect();
            $sub_id = $this->input->post('sub_id_' . $row->Subcategory_Id);
            $cat_id = $this->input->post('cat_id_' . $row->Cat_ID);
            $quantity = $this->input->post('quantity_' . $row->Cat_ID . '_' . $row->Subcategory_Id);
            if ($quantity > 0) {
                $data[] = array(
                    'Package_Id' => $package_id,
                    'Cat_id' => $cat_id,
                    'Subcat_Id' => $sub_id,
                    'Allowed_Quantity' => $quantity,
                    'Created_on' => $created_on,
                    'Created_by' => $user,
                    'Is_Active' => TRUE
                );
                //$this->db->insert_batch('tbl_package_restriction_new', $data);
                $AddPackageRestriction = $this->Package_model->AddSinglePackageRestriction($data);
                $this->db->reconnect();
            }
        endforeach;

        if ($AddPackageRestriction) {
            return redirect(base_url() . 'package_restriction');
        } else {
            echo 'Error';
        }
    }

    public function GetRest_Edit($R_Id) {
        $this->load->model('Package/Package_model', 'Package_model');
        $data1["package_restriction"] = $this->Package_model->edit_package_restriction($R_Id);
        $this->load->model('Package/Package_model', 'Package_model');
        $data2["package_list"] = $this->Package_model->GetPackageList();
        $data = $data1 + $data2;
        $this->config->config["Pagetitle"] = 'Edit Package Restriction';
        $this->load->view('Package/edit_package_restriction', $data);
    }

    public function EditPackageRestriction() {
        $this->load->model('Package/Package_model', 'Package_model');
        $EditPackageRestriction = $this->Package_model->EditPackageRestriction();
        if ($EditPackageRestriction) {
            return redirect(base_url() . 'package_restriction');
        }
    }

    public function Rest_Delete($R_Id) {
        $this->load->model('Package/Package_model', 'Package_model');
        $delete = $this->Package_model->Rest_Delete($R_Id);
        if ($delete) {
            return redirect(base_url() . 'package_restriction');
        } else {
            $this->session->set_flashdata('userData', 'Error in User Deletion.!!');
        }
    }

//    public function today_package() {
//        $this->load->model('Package/Package_model', 'Package_model');
//        $data["today_package"] = $this->Package_model->today_package();
//        $this->config->config["Pagetitle"] = "Today's Package";
//        $this->load->view('Package/today_package', $data);
//    }

    public function Add_Today_Package($p_id) {
        $this->load->model('Package/Package_model', 'Package_model');
        $data1["package_list"] = $this->Package_model->GetTodayPackageList($p_id);
        $this->db->reconnect();
        $data2["package_restriction"] = $this->Package_model->edit_package_restriction($p_id);
        $this->db->reconnect();
        $this->load->model('Menu/Menu_model', 'Menu_model');
        $data3["Get_cat_sub_name"] = $this->Package_model->GetCategoryAndSubCategory();
        $this->db->reconnect();
        $data4["Get_cat_sub"] = $this->Package_model->Get_Category_Subcategory();
        $data = $data1 + $data2 + $data3 + $data4;
        $this->config->config["Pagetitle"] = "Today's Package";
        $this->load->view('Package/add_today_package', $data);
    }

    public function AddTodayItem() {
        $this->load->model('Package/Package_model', 'Package_model');
        $package = $this->Package_model->AddTodayItem();
//        $this->load->view('Package/package');
        if ($package) {
            return redirect(base_url() . 'package');
        }
    }

    public function Get_Edit_package($pac_id) {
        $this->load->model('Package/Package_model', 'Package_model');
        $data["Edit_package"] = $this->Package_model->Edit_package($pac_id);
        $this->config->config["Pagetitle"] = 'Edit Package';
        $this->load->view('Package/package_edit', $data);
    }

    public function EditPackage() {
        $pname = $this->input->post('pname');
        $upPath = './images/packageImage/' . $pname;
        if (!is_dir($upPath)) {
            mkdir($upPath, 0777, true);
        }
        $config['upload_path'] = $upPath;
        $config['allowed_types'] = 'gif|jpg|png';

        $config['overwrite'] = TRUE;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('pimg')) {
            $data = $this->upload->data();
            $image = $data['file_name'];
            //$this->load->view('upload_success', $data);
        } else {
            $error = array('error' => $this->upload->display_errors());
            //$this->load->view('custom_view', $error);
        }
        $this->load->model('Package/Package_model', 'Package_model');
        $package = $this->Package_model->EditPackage($image);
        if ($package) {
            return redirect(base_url() . 'package');
        } else {
            
        }
    }

    public function GetAllPackageProducts() {
        $this->load->model('Package/Package_model', 'Package_model');
        $data["GetAllPackageProducts"] = $this->Package_model->GetAllPackageProducts(0, 0);
        $this->config->config["Pagetitle"] = 'All Package Item';
        $this->load->view('Package/today_package', $data);
    }

    public function Get_Edit_Today_Package($today_id) {
        $this->load->model('Menu/Menu_model', 'Menu_model');
        $data1["Menu_list"] = $this->Menu_model->GetMenuList();
        $this->load->model('Package/Package_model', 'Package_model');
        $data2["GetPackageProducts"] = $this->Package_model->GetPackageProducts(0, $today_id);
        $data = $data1 + $data2;
        $this->config->config["Pagetitle"] = 'Edit Today Package Item';
        $this->load->view('Package/edit_today_package', $data);
    }

    public function EditTodayPackageItem() {
        $this->load->model('Package/Package_model', 'Package_model');
        $EditTodayPackageproduct = $this->Package_model->EditTodayPackageItem();
        if ($EditTodayPackageproduct) {
            return redirect(base_url() . 'today_package');
        }
    }

    public function delete_today_package($today_id) {
        $this->load->model('Package/Package_model', 'Package_model');
        $DeleteTodayPackageproduct = $this->Package_model->delete_today_package($today_id);
        if ($DeleteTodayPackageproduct) {
            return redirect(base_url() . 'today_package');
        }
    }

}
