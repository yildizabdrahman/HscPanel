<?php
function controller($name) //controller dosyalarını yükleme
{

    return controller . '/' . $name . '.php';
}

function view($name)  //view dosyalarını yükleme
{
    return view . '/' . $name . '.php';
}

function lang($code)  //dil dosyası çeviri
{
    global $lang;

    if (isset($lang[$code])) {

        return $lang[$code];
    } else {

        return $code;
    }
}

function getPermissionURL()  //izine tabi tutulan sayfalar
{
    return [
        'index'          => 'Panel Anasayfa Görüntüleme',
        'permissions'    => 'İzinler Sayfası Görüntüleme ',
        'groups'         => 'Grouplar Sayfası Görüntüleme',
        'add-group'      => 'Group Ekleme Sayfası',
        'edit-group'     => 'Group Düzenleme Sayfası',
        'hard-delete'    => 'Kalıcı Olarak Silme Yetkisi',
        'soft-delete'    => 'Çöp Kutusuna Atma Yetkisi',
        'recycle'        => 'Geri Dönüştürme Yetkisi',
    ];
}

function getAllowedURL() //izne tabi olmayan verilen sayfalar
{
    return [
        'logout'      => 'Çıkış',
        '404'         => 'Hata',
        'deneme'      => 'Deneme'
    ];
}
function adminLoginNotAllowedURL()  // login sonrası gitmemsi gereken sayfalar
{
    return [
        'login'      => 'Giriş',
    ];
}

function isPermissionURL($key)  // izin varmı yokmu control etme
{
    $PerKey     =  array_keys(getPermissionURL());
    $userPer    = session('userPermit');
    if (!in_array($key, $PerKey) || !in_array($key, $userPer)) {
        return false;
    }
    return true;
}

function session_flasdata($key)  //anlık tek seferlik session
{
    if (isset($_SESSION[$key])) {
        $result = $_SESSION[$key];
        unset($_SESSION[$key]);
        return  $result;
    }
}
