<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['login'] = 'auth/login';
$route['logout'] = 'auth/logout';
$route['admin/(:any)'] = 'auth/admin/$1';
$route['admin/(:any)/(:any)'] = 'auth/admin/$1/$2';
$route['dashboard'] = 'auth/dashboard';