<?php
ob_start();

if (post('submit')) {

    $data['group_id']            = 1;
    $data['name']                = post('name');
    $data['last_name']           = 'Yıldız';
    $data['user_name']           = permalink( post('name').' Yıldız');
    $data['password']            = md5('12345');
    $data['status']              = 1;
    $data['rank']                = 1;

    if (!$data['name']) {

        $error = 'kullanıcı adı boş bırakılamaz...';
        
    } else {

        $insert = $db->insert('users')->set($data);

        if ($insert) {

            redirect(base_url('profile/' . $data['user_name']));
        }
    }
}

require_once view('register');
