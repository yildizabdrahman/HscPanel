<?php

$tableName = 'languages';


if (post('submit')) {

    foreach ($_POST['title'] as $title) {
        if ($title == "") {
            session('error', lang('add_language_error_message'));
            redirect($_SERVER['HTTP_REFERER']);
            return;
        }
    }

    $isItem = $db->from($tableName)->where('code', permalink($_POST['code']))->first();

    if ($isItem) {
        session('error', lang('add_language_duplicate_entry_message'));
        redirect($_SERVER['HTTP_REFERER']);
        return;
    }

    $data['title']       = json_encode($_POST['title']);
    $data['code']        = permalink($_POST['code']);
    $data['flag']        = permalink($_POST['code']);

    $resut = $db->insert($tableName)->set($data);

    if ($resut) {

        recurse_copy(dir . '/app/languages/' . $config['defaultLanguAge'], dir . '/app/languages/' . permalink($_POST['code']));

        redirect(base_url('admin/languages'));
    }
}

$languages = $db->from('languages')->where('is_active', 1)->all();

require view('admin/languages/add');
