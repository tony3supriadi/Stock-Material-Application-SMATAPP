<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'app';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;

$route['/index'] = '/';
$route['/login'] = '/login';
$route['/logout'] = '/logout';

