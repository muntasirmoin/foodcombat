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


//menu start
$route['menu-form']='Welcome/menu';

//menu end

//about start
$route['about-form']='Welcome/about';
//about end

//contact start
$route['contact-form']='Welcome/contact';
$route['contact-us']= 'Welcome/contact_us';
//contact end

//order start
$route['order-form']='Welcome/order';
$route['order-us']= 'Welcome/order_us';
//order end

//reservation start
$route['reservation-form']='Welcome/reservation';
$route['reservation-us']= 'Welcome/reservation_us';
//reservation end


//login start & Signup
$route['admin_login']='admin_controller/admin_login_control';

$route['register-view']='admin_controller/admin_register_form';

$route['admin_signup']='admin_controller/admin_signup_control'; 
//login end


// Admin Panel
$route['dashboard']='admin_controller/dashboard';
$route['food']='admin_controller/food';

$route['edit-food-item/(.+)'] = 'admin_controller/edit_food/$1';
$route['update-food'] = 'admin_controller/update_food';

$route['delete-food/(.+)'] = 'admin_controller/delete_food/$1';


//add food
$route['add-food'] = 'admin_controller/add_food';
$route['save-food'] = 'admin_controller/save_food';


//oreder
$route['order']='admin_controller/order';


//reservation
$route['reservation']='admin_controller/reservation';

//contact

$route['contact']='admin_controller/contact';

$route['logout'] = 'admin_controller/logout';