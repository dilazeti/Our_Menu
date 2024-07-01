<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'PagesController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['home'] = 'PagesController/index';
$route['details'] = 'PagesController/detailrecipe';
$route['lists'] = 'PagesController/listmenu';
$route['lists'] = 'MenuController/index';
$route['details'] = 'MenuController/detail';
$route['submits'] = 'PagesController/submitmenu';
$route['insert'] = 'MenuController/insert';
// $route['input'] = 'MenuController/input';

$route['contacts'] = 'PagesController/contactus';

// $route['menu/create'] = 'MenuController/create';
// $route['menu/store'] = 'MenuController/store';