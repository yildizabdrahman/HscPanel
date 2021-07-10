<?php

$config = array();
$config['db'] = [
    'host' => 'localhost',
    'dbname' => 'hsc_cms',
    'user' => 'root',
    'pass'  => ''
];

$current_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) ?? 'tr';

$config['defaultLanguAge'] = $current_lang;
$config['softDelete']      = true;    // yumuşak silme aktif pasif
$config['recycleBin']      = true;   // çöp kutusu aktif pasif

define('dir', realpath('.'));
define('controller', dir . '/app/controller');
define('view', dir . '/app/view');
define('url', 'http://' . $_SERVER['SERVER_NAME'] . '/hsc/newCms/');
