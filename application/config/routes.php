<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'Website';
$route['404_override'] = 'error404';
$route['translate_uri_dashes'] = FALSE;

//User
$route['home'] = 'Website';

$route['menu'] = 'user/C_product/productMenu';
$route['menu/(:any)'] = 'user/C_product/productMenu/$1';
$route['menu/(:any)/(:any)'] = 'user/C_product/productMenu/$1/$2';


$route['product'] = 'user/C_product/product';
$route['product/(:any)'] = 'user/C_product/product/$1';
$route['product/(:any)/(:any)'] = 'user/C_product/product/$1/$2';

$route['product_detail'] = 'user/C_productdetail/detail';
$route['product_detail/(:any)'] = 'user/C_productdetail/detail/$1';
$route['product_detail/(:any)/(:any)'] = 'user/C_productdetail/detail/$1/$2';





//Admin
$route['admin'] = 'content/C_dashboard';
$route['admin/(:any)'] = 'content/C_dashboard/$1';

$route['login'] = 'content/C_login/login';
$route['logout'] = 'content/C_login/logout';
$route['validation'] = 'content/C_login/validation';

$route['category'] = 'content/C_category';
$route['category/(:any)'] = 'content/C_category/$1';
$route['category/(:any)/(:any)'] = 'content/C_category/$1/$2';

$route['brand'] = 'content/C_brand';
$route['brand/(:any)'] = 'content/C_brand/$1';
$route['brand/(:any)/(:any)'] = 'content/C_brand/$1/$2';

$route['list_product'] = 'content/C_product';
$route['list_product/(:any)'] = 'content/C_product/$1';
$route['list_product/(:any)/(:any)'] = 'content/C_product/$1/$2';

$route['slider'] = 'content/C_slider';
$route['slider/(:any)'] = 'content/C_slider/$1';
$route['slider/(:any)/(:any)'] = 'content/C_slider/$1/$2';

$route['testimoni'] = 'content/C_testimoni';
$route['testimoni/(:any)'] = 'content/C_testimoni/$1';
$route['testimoni/(:any)/(:any)'] = 'content/C_testimoni/$1/$2';

$route['about'] = 'content/C_footer/about';
$route['store'] = 'content/C_footer/store';
$route['buy'] = 'content/C_footer/buy';
$route['social'] = 'content/C_footer/social';
$route['social/(:any)'] = 'content/C_footer/$1';
$route['social/(:any)/(:any)'] = 'content/C_footer/$1/$2';

$route['superadmin'] = 'content/C_superadmin';
$route['superadmin/(:any)'] = 'content/C_superadmin/$1';
$route['superadmin/(:any)/(:any)'] = 'content/C_superadmin/$1/$2';
