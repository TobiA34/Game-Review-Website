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
$route['default_controller'] = 'Home';
$route['index'] = 'Home/index';
$route['furtherinformation'] = 'Home/further_information';
$route['login'] = 'Login/loginPage';
$route['home'] = 'Home/aboutPage';
$route['register'] = 'Register/registerPage';
$route['isAdmin'] = 'Account/isAdmin';
$route['darkmode'] = 'Account/darkmode';

$route['checkServer'] = 'Home/checkServer';
$route['server-status'] = 'Home/serverView';
$route['chatRoomPage'] = 'Review/chatRoomPage';
$route['chatRoom'] = 'ChatRoom/chatPage';
$route['insert_users'] = 'Register/auto_insert';

$route['get_comments'] = 'Review/get_comments';
$route['set_comments'] = 'Review/set_comments';
 $route['select'] = 'Home/select';
$route['checkLogin'] = 'Login/checkLogin';
$route['account'] = 'Account/accountPage';
$route['review'] = 'Review/reviewPage';
$route['article/(:any)'] = 'Review/article/$1';
$route['logOut'] = 'Login/logOut';
//$route['buttons/:any'] = 'Home/buttons';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


