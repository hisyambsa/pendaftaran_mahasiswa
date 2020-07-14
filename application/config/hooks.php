<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/

$hook['post_controller_constructor'][] = array(
    'class'    => '',
    'function' => 'showHeader',
    'filename' => 'myHooks.php',
    'filepath' => 'hooks',
    'params'   => array('judul')
);
$hook['post_controller'][] = array(
    'class'    => '',
    'function' => 'showFooter',
    'filename' => 'myHooks.php',
    'filepath' => 'hooks',
    'params'   => ''
);
