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
$route['default_controller'] = 'website';
$route['404_override'] = 'error404';
$route['translate_uri_dashes'] = FALSE;

$route['admin'] = 'content/c_dashboard';
$route['admin/(:any)'] = "content/c_dashboard/$1";

$route['login'] = 'content/c_login/login';
$route['logout'] = 'content/c_login/logout';
$route['validation'] = 'content/c_login/validation';

$route['category'] = 'content/c_category';
$route['category/(:any)'] = "content/c_category/$1";
$route['category/(:any)/(:any)'] = "content/c_category/$1/$2";

$route['brand'] = 'content/c_brand';
$route['brand/(:any)'] = "content/c_brand/$1";
$route['brand/(:any)/(:any)'] = "content/c_brand/$1/$2";

$route['product'] = 'content/c_product';
$route['product/(:any)'] = "content/c_product/$1";
$route['product/(:any)/(:any)'] = "content/c_product/$1/$2";

$route['slider'] = 'content/c_slider';
$route['slider/(:any)'] = "content/c_slider/$1";
$route['slider/(:any)/(:any)'] = "content/c_slider/$1/$2";

$route['testimoni'] = 'content/c_testimoni';
$route['testimoni/(:any)'] = "content/c_testimoni/$1";
$route['testimoni/(:any)/(:any)'] = "content/c_testimoni/$1/$2";

$route['about'] = 'content/c_footer/about';
$route['store'] = 'content/c_footer/store';
$route['buy'] = 'content/c_footer/buy';
$route['social'] = 'content/c_footer/social';
$route['social/(:any)'] = "content/c_footer/$1";
$route['social/(:any)/(:any)'] = "content/c_footer/$1/$2";

$route['superadmin'] = 'content/c_superadmin';
$route['superadmin/(:any)'] = "content/c_superadmin/$1";
$route['superadmin/(:any)/(:any)'] = "content/c_superadmin/$1/$2";
