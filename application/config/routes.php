<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['default_controller'] = 'home';
$route['getNavbar'] = 'home/getNavbar';
$route['getAboutUs'] = 'home/getAboutUs';
$route['getMitraMain'] = 'home/getMitraMain';
$route['getPengamananMain'] = 'home/getPengamananMain';
$route['getPelatihanMain'] = 'home/getPelatihanMain';
$route['getKarirMain'] = 'home/getKarirMain';

include('routes/admin_route.php');
include('routes/language_route.php');