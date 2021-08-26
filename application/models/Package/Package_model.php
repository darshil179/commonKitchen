<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Package_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function GetPackageList() {

        $this->db->select('*');
        $this->db->from('tbl_package');
        $this->db->where('Is_Active', 1);
        $query = $this->db->get();
//
//        $query = $this->db->get('category');
//$R = $this->db->select('*')->from('category')->where('Is_Active', 1)->get();
        return $query->result();
    }

    public function DeletePackage($pac_id) {
        $data = array(
            'Is_Active' => 0
        );
        $this->db->where('Package_Id', $pac_id);
        $query = $this->db->update('tbl_package', $data);
        return $query;
    }

    public function GetPackageItem() {
        $this->db->select('*');
        $this->db->from('tbl_package_item');
        $this->db->where('Is_Active', 1);
        $query = $this->db->get();
        return $query->result();
    }

    public function GetItem_Edit($item_id) {
        $this->db->select('*');
        $this->db->from('tbl_package_item');
        $this->db->where('Item_Id', $item_id);
        $query = $this->db->get();
        return $query->row();
    }

    public function Edit_item($image) {
        $item_id = $this->input->post('item_id');
        $iname = $this->input->post('iname');
        $quantity = $this->input->post('quantity');
        $price = $this->input->post('price');
        $updated_on = date('Y-m-d H:i:s');
        $user = $this->session->userdata('UserId');
        if (empty($image)) {
            $data = array(
                'Item_Id' => $item_id,
                'Item_Name' => $iname,
                'Quantity' => $quantity,
                'Price' => $price,
                'Updated_by' => $user,
                'Updated_on' => $updated_on,
                'Is_Active' => true,
            );
        } else {
            $data = array(
                'Item_Id' => $item_id,
                'Item_Name' => $iname,
                'Quantity' => $quantity,
                'Price' => $price,
                'Updated_by' => $user,
                'Updated_on' => $updated_on,
                'item_image' => $image,
                'Is_Active' => true,
            );
        }

        $this->db->where('Item_Id', $item_id);
        $query = $this->db->update('tbl_package_item', $data);
        return $query;
    }

    public function Additem($image) {
        $iname = $this->input->post('iname');
        $quantity = $this->input->post('quantity');
        $price = $this->input->post('price');
        $created_on = date('Y-m-d H:i:s');
        $user = $this->session->userdata('UserId');

        $data = array(
            'Item_Name' => $iname,
            'Quantity' => $quantity,
            'Price' => $price,
            'Created_On' => $created_on,
            'Created_By' => $user,
            'item_image' => $image,
            'Is_Active' => true,
        );
        $query = $this->db->insert('tbl_package_item', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function Item_Delete($item_id) {
        $data = array(
            'Is_Active' => 0
        );
        $this->db->where('Item_Id', $item_id);
        $query = $this->db->update('tbl_package_item', $data);
        return $query;
    }

    public function AddPackage($image) {
//        $item_id = $this->input->post('item[]');
        $pname = $this->input->post('pname');
        $pinfo = $this->input->post('pinfo');
        $price = $this->input->post('price');
        $created_on = date('Y-m-d H:i:s');
        $user = $this->session->userdata('UserId');
        $data = array(
//            'Item_Id' => $item_id,
            'Package_name' => $pname,
            'Package_info' => $pinfo,
            'Price' => $price,
            'Created_on' => $created_on,
            'Created_by' => $user,
            'Package_Img' => $image,
            'Is_Active' => true,
        );
        $query = $this->db->insert('tbl_package', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function package_restriction() {
        $this->db->select('tbl_package_restriction.R_Id,tbl_package_restriction.Roti,tbl_package_restriction.Sabji_1,tbl_package_restriction.Sabji_2,tbl_package_restriction.Sweet,tbl_package_restriction.Pickel,tbl_package_restriction.Rosted_Papad,tbl_package_restriction.Dal,tbl_package_restriction.Rice,tbl_package_restriction.Masala_Chaas,tbl_package.Package_name');
        $this->db->from('tbl_package_restriction');
        $this->db->join('tbl_package', 'tbl_package.Package_Id=tbl_package_restriction.Package_Id');
        $this->db->where('tbl_package_restriction.Is_Active', 1);
        $query = $this->db->get();

        return $query->result();
    }

    public function AddPackageRestriction($U) {
        $package_id = $this->input->post('package_id');
        $created_on = date('Y-m-d H:i:s');
        $user = $this->session->userdata('UserId');
        
        foreach ($U as $row) :
            $sub_id = $this->input->post('sub_id_' . $row->Subcategory_Id);
            $cat_id = $this->input->post('sub_id_' . $row->Cat_ID);
            $quantity = $this->input->post('quantity_' . $row->Cat_ID . '_' . $row->Subcategory_Id);
            if ($quantity > 0) {
                $data[] = array(
                    'Package_Id' => $package_id,
                    'Cat_id' => $cat_id,
                    'Subcat_Id' => $sub_id,
                    'Allowed_Quantity' => $quantity,
                    'Created_on' => $created_on,
                    'Created_by' => $user,
                    'Is_Active' => TRUE,
                );
            }

            //$this->db->insert('tbl_package_restriction_new', $data);
            $this->db->insert_batch('tbl_package_restriction_new', $data);
            $this->db->reconnect();
        endforeach;
//        $data[] = array(
//            'Allowed_Quantity' => 1,
//            'Cat_id' => 1,
//            'Created_by' => $user,
//            'Created_on' => date('Y-m-d H:i:s'),
//            'Is_Active' => TRUE,
//            'Package_Id' => $package_id,
//            'Subcat_Id' => 3,
//        );
        //$dataCount = count($data);
        //$this->db->reconnect();
        
//        if ($dataCount) {
//            $this->db->insert_batch('tbl_package_restriction_new', $data);
//        }
//
//        if ($this->db->affected_rows() !== '') {
//            return TRUE;
//        }
        //return ($this->db->affected_rows() != 1) ? false : true;
    }
    
    public function AddSinglePackageRestriction($U) {
//        $package_id = $this->input->post('package_id');
//        $created_on = date('Y-m-d H:i:s');
//        $user = $this->session->userdata('UserId');
//        
//        $sub_id = $this->input->post('sub_id_' . $row->Subcategory_Id);
//        $cat_id = $this->input->post('sub_id_' . $row->Cat_ID);
//        $quantity = $this->input->post('quantity_' . $row->Cat_ID . '_' . $row->Subcategory_Id);
//        if ($quantity > 0) {
//            $data[] = array(
//                'Package_Id' => $package_id,
//                'Cat_id' => $cat_id,
//                'Subcat_Id' => $sub_id,
//                'Allowed_Quantity' => $quantity,
//                'Created_on' => $created_on,
//                'Created_by' => $user,
//                'Is_Active' => TRUE,
//            );
//        }
        $this->db->insert_batch('tbl_package_restriction_new', $U);
        $this->db->reconnect();
    }

//        $sub_id = $this->input->post('sub_id');
//        $cat_id = $this->input->post('cat_id');
//        $quantity = $this->input->post('quantity');
//        $sweet = $this->input->post('sweet');
//        $pickel = $this->input->post('pickel');
//        $rosted_papad = $this->input->post('rosted_papad');
//        $dal = $this->input->post('dal');
//        $rice = $this->input->post('rice');
//        $masala_chaas = $this->input->post('masala_chaas');
//        foreach ($cat_id as $rowc):
//            foreach ($sub_id as $rows):
//            $data = array(
//                'Package_Id' => $package_id,
//                'Cat_id' => $rowc,
//                'Subcat_Id' => $sub_id,
//                'Allowed_Quantity' => $quantity,
////            'Sweet' => $sweet,
////            'Pickel' => $pickel,
////            'Rosted_Papad' => $rosted_papad,
////            'Dal' => $dal,
////            'Rice' => $rice,
////            'Masala_Chaas' => $masala_chaas,
//                'Created_on' => $created_on,
//                'Created_by' => $user,
//                'Is_Active' => true,
//            );
//            $query = $this->db->insert('tbl_package_restriction_new', $data);
////            endforeach;
//        endforeach;
//        return ($this->db->affected_rows() != 1) ? false : true;


    public function edit_package_restriction($R_Id) {
        $this->db->select('tbl_package.Package_Id,tbl_package_restriction.R_Id,tbl_package_restriction.Roti,tbl_package_restriction.Sabji_1,tbl_package_restriction.Sabji_2,tbl_package_restriction.Sweet,tbl_package_restriction.Pickel,tbl_package_restriction.Rosted_Papad,tbl_package_restriction.Dal,tbl_package_restriction.Rice,tbl_package_restriction.Masala_Chaas,tbl_package.Package_name');
        $this->db->from('tbl_package_restriction');
        $this->db->join('tbl_package', 'tbl_package.Package_Id=tbl_package_restriction.Package_Id');
        $this->db->where('tbl_package_restriction.R_Id', $R_Id);
        $query = $this->db->get();

        return $query->row();
    }

    public function EditPackageRestriction() {
        $r_id = $this->input->post('r_id');
        $package_id = $this->input->post('package_id');
        $roti = $this->input->post('roti');
        $sabji1 = $this->input->post('sabji1');
        $sabji2 = $this->input->post('sabji2');
        $sweet = $this->input->post('sweet');
        $pickel = $this->input->post('pickel');
        $rosted_papad = $this->input->post('rosted_papad');
        $dal = $this->input->post('dal');
        $rice = $this->input->post('rice');
        $masala_chaas = $this->input->post('masala_chaas');
        $created_on = date('Y-m-d H:i:s');
        $user = $this->session->userdata('UserId');
        $data = array(
            'Package_Id' => $package_id,
            'Roti' => $roti,
            'Sabji_1' => $sabji1,
            'Sabji_2' => $sabji2,
            'Sweet' => $sweet,
            'Pickel' => $pickel,
            'Rosted_Papad' => $rosted_papad,
            'Dal' => $dal,
            'Rice' => $rice,
            'Masala_Chaas' => $masala_chaas,
            'Updated_on' => $created_on,
            'Updated_by' => $user,
            'Is_Active' => true,
        );
        $this->db->where('R_Id', $r_id);
        $query = $this->db->update('tbl_package_restriction', $data);
        return $query;
    }

    public function Rest_Delete($R_Id) {
        $data = array(
            'Is_Active' => 0
        );
        $this->db->where('R_Id', $R_Id);
        $query = $this->db->update('tbl_package_restriction', $data);
        return $query;
    }

    public function today_package() {
        $this->db->select('tbl_package_restriction.R_Id,tbl_package_restriction.Roti,tbl_package_restriction.Sabji_1,tbl_package_restriction.Sabji_2,tbl_package_restriction.Sweet,tbl_package_restriction.Pickel,tbl_package_restriction.Rosted_Papad,tbl_package_restriction.Dal,tbl_package_restriction.Rice,tbl_package_restriction.Masala_Chaas,tbl_package.Package_name');
        $this->db->from('tbl_package_restriction');
        $this->db->join('tbl_package', 'tbl_package.Package_Id=tbl_package_restriction.Package_Id');
        $this->db->where('tbl_package_restriction.Is_Active', 1);
        $query = $this->db->get();

        return $query->result();
    }

    public function GetTodayPackageList($p_id) {

        $this->db->select('*');
        $this->db->from('tbl_package');
        $this->db->where('Is_Active', 1);
        $this->db->where('Package_Id', $p_id);
        $query = $this->db->get();
//
//        $query = $this->db->get('category');
//$R = $this->db->select('*')->from('category')->where('Is_Active', 1)->get();
        return $query->row();
    }

    public function AddTodayItem() {
        $product = $this->input->post('product');
        $package_id = $this->input->post('package_id');
        foreach ($product as $row):
            $data1 = array(
                'Product_id' => $row,
                'Package_Id' => $package_id,
            );
//        foreach ($sabji as $row):
            $query = $this->db->insert('tbl_today_package', $data1);
        endforeach;
//        foreach ($roti as $row):
//            $data2 = array(
//                'Product_id' => $row,
//                'Package_Id' => $package_id,
//            );
////        foreach ($roti as $row):
//            $query = $this->db->insert('tbl_today_package', $data2);
//        endforeach;
//        foreach ($sweet as $row):
//            $data3 = array(
//                'Product_id' => $row,
//                'Package_Id' => $package_id,
//            );
//
//            $query = $this->db->insert('tbl_today_package', $data3);
//        endforeach;
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function Edit_package($pac_id) {
        $this->db->select('*');
        $this->db->from('tbl_package');
        $this->db->where('Package_Id', $pac_id);
        $query = $this->db->get();
//
//        $query = $this->db->get('category');
//$R = $this->db->select('*')->from('category')->where('Is_Active', 1)->get();
        return $query->row();
    }

    public function EditPackage($image) {
        $pac_id = $this->input->post('pac_id');
        $pname = $this->input->post('pname');
        $pinfo = $this->input->post('pinfo');
        $price = $this->input->post('price');
        $created_on = date('Y-m-d H:i:s');
        $user = $this->session->userdata('UserId');
        if (empty($image)) {
            $data = array(
//            'Item_Id' => $item_id,
                'Package_name' => $pname,
                'Package_info' => $pinfo,
                'Price' => $price,
                'Created_on' => $created_on,
                'Created_by' => $user,
//                'Package_Img' => $image,
                'Is_Active' => true,
            );
        } else {
            $data = array(
//            'Item_Id' => $item_id,
                'Package_name' => $pname,
                'Package_info' => $pinfo,
                'Price' => $price,
                'Created_on' => $created_on,
                'Created_by' => $user,
                'Package_Img' => $image,
                'Is_Active' => true,
            );
        }
        $this->db->where('Package_Id', $pac_id);
        $query = $this->db->update('tbl_package', $data);
        return $query;
    }

    public function GetAllPackageProducts() {
        $store = "CALL GetPackageProducts(0,0)";
        $U = $this->db->query($store);
        return $U->result();
    }

    public function GetPackageProducts($pac_id, $today_id) {
        $store = "CALL GetPackageProducts('$pac_id', '$today_id')";
        $U = $this->db->query($store);
        return $U->row();
    }

    public function EditTodayPackageItem() {
        $sabji = $this->input->post('sabji');
        $package_id = $this->input->post('package_id');
        $today_id = $this->input->post('today_id');
        $data = array(
            'Product_id' => $sabji,
        );
        $this->db->where('Today_Id', $today_id);
        $query = $this->db->update('tbl_today_package', $data);
        return $query;
    }

    public function delete_today_package($today_id) {
        $this->db->where('Today_Id', $today_id);
        $query = $this->db->delete('tbl_today_package');
        return $query;
    }

    public function GetCategoryAndSubCategory() {

        $store1 = "CALL GetCategoryAndSubCategory()";
        $Us = $this->db->query($store1);
        return $Us->result();
    }

    public function Get_Category_Subcategory() {

        $store2 = "CALL Get_Category_Subcategory()";
        $U = $this->db->query($store2);
        return $U->result();
    }

}
