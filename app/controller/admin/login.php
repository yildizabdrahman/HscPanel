<?php

if (post('submit')) {

    $data = [
        'user_name' => post('user_name'),
        'password'  => post('password'),
    ];

    if (!$data['user_name'] || !$data['password']) {

        $error = 'Lütfen tüm alanları eksiksiz doldurun';
    } else {

        $user =  $db->from('users')
            ->where('user_name', permalink($data['user_name']))
            ->where('password', md5($data['password']))
            ->first();

        if ($user) {
            
            $userPermit = $db->from('groups')->where('id',$user['group_id'])->first();  //get group

            session('admin_login', true);
            session('user_id',  $user['id']);
            session('group_id',  $user['group_id']);
            session('userPermit', json_decode($userPermit['permissions']));   //set group permisions
            redirect(base_url('admin/index'));
        } else {
            $error = 'Böyle bir kullanıcı bulunamadı, Lütfen bilgilerinizi kontrol edin...';
        }
    }
}

require view('admin/login');
