<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['dashboard'] = 'Auth/Login_Controller/Dashboard';
$route['welcome_message'] = 'Auth/Login_Controller/Signin';
$route['register'] = 'Auth/Login_Controller/Register';

//category
//$route['category'] = 'Auth/Login_Controller/Category';
$route['category'] = 'category/Category_controller/GetCategoryList';
$route['addcategory'] = 'category/Category_Controller/Add_category';
$route['edit/(:any)'] = 'category/Category_Controller/GetEdit_category/$1';
$route['delete/(:any)'] = 'category/Category_Controller/Delete_category/$1';


//Subcategory
$route['subcategory'] = 'subcategory/Subcategory_Controller/GetsubcategoryList';
$route['addsubcategory'] = 'subcategory/Subcategory_Controller/Add_subcategory';
$route['edit_subcategory/(:any)'] = 'subcategory/Subcategory_Controller/GetEdit_subcategory/$1';
$route['delete_subcategory/(:any)'] = 'subcategory/Subcategory_Controller/Delete_subcategory/$1';


//menu
$route['menu'] = 'Menu/Menu_controller/GetMenuList';
$route['add_menu'] = 'menu/Menu_controller/Add_product';
$route['editp/(:any)'] = 'Menu/Menu_Controller/GetEdit_menu/$1';
$route['deletep/(:any)'] = 'Menu/Menu_Controller/Delete_menu/$1';
$route['menu_category'] = 'menu/Menu_controller/Menu_Category';

//Package
$route['package'] = 'Package/Package_controller/GetPackageList';
$route['add_package'] = 'Package/Package_controller/Add_package';
$route['deletepackage/(:any)'] = 'Package/Package_controller/Delete_package/$1';
$route['editpackage/(:any)'] = 'Package/Package_controller/Get_Edit_package/$1';
$route['addt/(:any)'] = 'Package/Package_controller/Add_Today_Package/$1';

//Package Item
$route['package_item'] = 'Package/Package_controller/GetPackageItem';
$route['editi/(:any)'] = 'Package/Package_controller/GetItem_Edit/$1';
$route['deletei/(:any)'] = 'Package/Package_controller/Item_Delete/$1';
$route['Add_Item'] = 'Package/Package_controller/Add_Item';

//package Restriction
$route['package_restriction'] = 'Package/Package_controller/package_restriction';
$route['add_package_restriction'] = 'Package/Package_controller/add_package_restriction';
$route['editr/(:any)'] = 'Package/Package_controller/GetRest_Edit/$1';
$route['deleter/(:any)'] = 'Package/Package_controller/Rest_Delete/$1';

//Today's Package
$route['today_package'] = 'Package/Package_controller/GetAllPackageProducts';
$route['edit_today_package/(:any)'] = 'Package/Package_controller/Get_Edit_Today_Package/$1';
$route['delete_today_package/(:any)'] = 'Package/Package_controller/Delete_Today_Package/$1';
//$route['add_package_restriction'] = 'Package/Package_controller/add_package_restriction';


//Franchise
$route['franchise'] = 'Franchise/Franchise_Controller/GetFranchiseList';
$route['addfranchise'] = 'Franchise/Franchise_Controller/Add_Franchise';
$route['editfranchise/(:any)'] = 'Franchise/Franchise_Controller/GetEdit_franchise/$1';
$route['deletefranchise/(:any)'] = 'Franchise/Franchise_Controller/Delete_franchise/$1';
$route['addorigin/(:any)'] = 'Franchise/Franchise_Controller/Add_Origin/$1';


//User Management
$route['usermanagement'] = 'User_Management/User_Controller/User_Management';
//$route['addfranchise'] = 'Franchise/Franchise_Controller/Add_Franchise';

//Manager
$route['add_manager'] = 'Manager/Manager_Controller/Add_Manager';
$route['editManager/(:any)'] = 'Manager/Manager_Controller/GetEdit_manager/$1';
$route['deleteManager/(:any)'] = 'Manager/Manager_Controller/Delete_manager/$1';


//CHEF
$route['add_chef'] = 'Chef/Chef_Controller/Add_Chef';
$route['editChef/(:any)'] = 'Chef/Chef_Controller/GetEdit_Chef/$1';
$route['deleteChef/(:any)'] = 'Chef/Chef_Controller/Delete_Chef/$1';


//DELIVERY PERSON
$route['add_delivery'] = 'Delivery/Delivery_Controller/Add_Delivery';
$route['editDelivery/(:any)'] = 'Delivery/Delivery_Controller/GetEdit_Del/$1';
$route['deleteDelivery/(:any)'] = 'Delivery/Delivery_Controller/Delete_Del/$1';


//FRONTEND WEBSITE
$route['about'] = 'Frontend/Frontend_Controller/about';
$route['home'] = 'Frontend/Frontend_Controller/home';
$route['menu_frontend'] = 'Frontend/Frontend_Controller/menu';
$route['blog'] = 'Frontend/Frontend_Controller/blog';
$route['blogdetail'] = 'Frontend/Frontend_Controller/blogdetail';
$route['contact'] = 'Frontend/Frontend_Controller/contact';
$route['element'] = 'Frontend/Frontend_Controller/element';
$route['category_frontend'] = 'Frontend/Frontend_Controller/category';
$route['single_product/(:any)'] = 'Frontend/Frontend_Controller/single_product/$1';
$route['single_category/(:any)'] = 'Frontend/Frontend_Controller/single_category/$1';

