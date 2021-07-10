<?php

$user = $db->from('kullanici')
    ->where('kullanici_ad', url(1))
    ->first();

if ($user) {
    echo 'Hoşgeldin ' . $user['name'].' '.$user['last_name'];
} else {

    echo 'User not found';
}
