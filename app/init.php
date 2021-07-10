
<?php
session_start();
ob_start();

function __autoload($className)
{
    $classFile = realpath('.') . '/app/classes/class.' . strtolower($className) . '.php';

    if (file_exists($classFile)) {

        require_once $classFile;
    }
}

Helper::Load();

//config upload
require_once 'app/system/config.php';

$langDir = dir . '/app/languages/' . $config['defaultLanguAge'];

if ($dh = opendir($langDir)) {

    while ($file = readdir($dh)) {

        if (is_file($langDir . '/' . $file)) {

            require  $langDir . '/' . $file;
        }
    }
}


$db = new basicdb($config['db']['host'], $config['db']['dbname'], $config['db']['user'], $config['db']['pass']);

$_url = get('url');

$_url = array_filter(explode('/', $_url));

if (!isset($_url[0])) {
    $_url[0] = 'index';
}

if (!file_exists(controller($_url[0]))) {
    $_url[0] = 'index';
}

require_once controller($_url[0]);

?>