<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "home/index";
$route['trang-chu'] = "home/home/index";
$route['register'] = "home/home/register";
$route['active-user/(:any)'] = "home/home/activate";
$route['logout'] = "home/home/logout";
$route['thanh-vien'] = "home/member/index";
$route['thanh-vien/doi-mat-khau'] = "home/home/change_pass";
$route['thanh-vien/card'] = "home/member/card";
$route['thanh-vien/chuyen-tien'] = "home/member/transfer_money";
$route['thanh-vien/chuyen-tien/login/(:any)'] = "home/member/confirm_transfer";
$route['thanh-vien/chuyen-tien/cofirm/(:any)'] = "home/member/confirm_trans";
$route['quan-tri'] = "ctv/systemctv/index";
$route['quan-tri/login'] = "ctv/homectv/login";
$route['404_override'] = '';



/* End of file routes.php */
/* Location: ./application/config/routes.php */