<?php

$tableName = 'languages';
$id        = url(2);

//mevcut dil
$language = $db->from($tableName)->where('id', $id)->first();
$language['title'] = json_decode($language['title']);

//durumu aktif olan tüm diller
$languages = $db->from($tableName)->where('is_active', 1)->all();

if (post('submit')) {

    //dil title boş dolu kontrolü
    foreach ($_POST['title'] as $title) {
        if ($title == "") {
            session('error', lang('add_language_error_message'));
            redirect($_SERVER['HTTP_REFERER']);
            return;
        }
    }

    //dil kodu benzersizlik kontrolü
    if ($language['code'] != permalink($_POST['code'])) {
        $allLanguages = $db->from($tableName)->all();
        foreach ($allLanguages as $row) {
            if ($row['code'] == permalink($_POST['code'])) {
                session('error', lang('add_language_duplicate_entry_message'));
                redirect($_SERVER['HTTP_REFERER']);
                return;
            }
        }
    }
    // kayıt olacak data
    $data['title']       = json_encode($_POST['title']);
    $data['code']        = permalink($_POST['code']);
    $data['flag']        = permalink($_POST['code']);

    $resut = $db->update($tableName)->where('id', $id)->set($data);

    if ($resut) {

        //dil dosyası silme oluşturma
        if ($language['code'] != permalink($_POST['code'])) {

            $dirPath = dir . '/app/languages/' . permalink($language['code']);
            if (is_dir($dirPath)) {
                delete_directory($dirPath);
            }
            recurse_copy(dir . '/app/languages/' . $config['defaultLanguAge'], dir . '/app/languages/' . permalink($_POST['code']));
        }
        redirect(base_url('admin/edit-language/') . $id);
    }
}

require view('admin/languages/edit');
