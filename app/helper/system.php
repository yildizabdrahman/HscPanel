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
        'index'               => 'Panel Anasayfa Görüntüleme',
        'groups'              => 'Grouplar Sayfası Görüntüleme',
        'add-group'           => 'Group Ekleme Yetkisi',
        'edit-group'          => 'Group Düzenleme Sayfası',
        'languages'           => 'Diller SayfasI Görüntülenme',
        'add-language'        => 'Dil Ekleme Yetkisi',
        'edit-language'       => 'Dil Düzenleme Yetkisi',
        'hard-delete'         => 'Kalıcı Olarak Silme Yetkisi',
        'soft-delete'         => 'Çöp Kutusuna Atma Yetkisi',
        'recycle'             => 'Geri Dönüştürme Yetkisi',
        'language-translate'  => 'Dil Çeviri Yönetimi'
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

function recurse_copy($src, $dst)
{
    $dir = opendir($src);
    @mkdir($dst);
    while (false !== ($file = readdir($dir))) {
        if (($file != '.') && ($file != '..')) {
            if (is_dir($src . '/' . $file)) {
                recurse_copy($src . '/' . $file, $dst . '/' . $file);
            } else {
                copy($src . '/' . $file, $dst . '/' . $file);
            }
        }
    }
    closedir($dir);
}

function delete_directory($dirname)
{
    if (is_dir($dirname))
        $dir_handle = opendir($dirname);
    if (!$dir_handle)
        return false;
    while ($file = readdir($dir_handle)) {
        if ($file != "." && $file != "..") {
            if (!is_dir($dirname . "/" . $file))
                unlink($dirname . "/" . $file);
            else
                delete_directory($dirname . '/' . $file);
        }
    }
    closedir($dir_handle);
    rmdir($dirname);
    return true;
}
