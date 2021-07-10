<?php

if (!url(1)) {

    $_url[1] = 'index';
}

if (!file_exists(controller('admin/' . url(1)))) {

    $_url[1] = '404';
}

if (!session('admin_login')) {

    $_url[1] = 'login';
}

$allowedURL = array_keys(getAllowedURL());
$adminLoginNotAllowedURL = array_keys(adminLoginNotAllowedURL());


if (!isPermissionURL(url(1)) && !in_array(url(1), $allowedURL) && !in_array(url(1), $adminLoginNotAllowedURL)) {

    $_url[1] = '404';
}

if (session('admin_login') && in_array(url(1), $adminLoginNotAllowedURL)) {

    redirect(base_url('admin'));
}

require_once controller('admin/' . url(1));
