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

$route['admin'] = 'Content/C_dashboard';
$route['admin/(:any)'] = "Content/C_dashboard/$1";

$route['login'] = 'Content/C_login/login';
$route['logout'] = 'Content/C_login/logout';
$route['validation'] = 'Content/C_login/validation';

$route['category'] = 'Content/C_category';
$route['category/(:any)'] = "Content/C_category/$1";
$route['category/(:any)/(:any)'] = "Content/C_category/$1/$2";

$route['brand'] = 'Content/C_brand';
$route['brand/(:any)'] = "Content/C_brand/$1";
$route['brand/(:any)/(:any)'] = "Content/C_brand/$1/$2";

$route['product'] = 'Content/C_product';
$route['product/(:any)'] = "Content/C_product/$1";
$route['product/(:any)/(:any)'] = "Content/C_product/$1/$2";

$route['slider'] = 'Content/C_slider';
$route['slider/(:any)'] = "Content/C_slider/$1";
$route['slider/(:any)/(:any)'] = "Content/C_slider/$1/$2";

$route['testimoni'] = 'Content/C_testimoni';
$route['testimoni/(:any)'] = "Content/C_testimoni/$1";
$route['testimoni/(:any)/(:any)'] = "Content/C_testimoni/$1/$2";

$route['about'] = 'Content/C_footer/about';
$route['store'] = 'Content/C_footer/store';
$route['buy'] = 'Content/C_footer/buy';
$route['social'] = 'Content/C_footer/social';
$route['social/(:any)'] = "Content/C_footer/$1";
$route['social/(:any)/(:any)'] = "Content/C_footer/$1/$2";

$route['superadmin'] = 'Content/C_superadmin';
$route['superadmin/(:any)'] = "Content/C_superadmin/$1";
$route['superadmin/(:any)/(:any)'] = "Content/C_superadmin/$1/$2";
