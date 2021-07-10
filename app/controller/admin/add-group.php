<?php

$tableName = 'groups';


if (post('submit')) {

    foreach ($_POST['title'] as $title) {
        if ($title == "") {
            session('error', lang('add_group_error_message'));
            redirect($_SERVER['HTTP_REFERER']);
            return;
        }
    }
    $slug = permalink($_POST['title'][$config['defaultLanguAge']]);

    $isItem = $db->from($tableName)->where('slug', $slug)->first();

    if ($isItem) {
        session('error', lang('add_group_duplicate_entry_message'));
        redirect($_SERVER['HTTP_REFERER']);
        return;
    }

    $data['title']       = json_encode($_POST['title']);
    $data['slug']        = permalink($_POST['title'][$config['defaultLanguAge']]);
    $data['permissions'] = isset($_POST['permissions']) && $_POST['permissions'] != "" ? json_encode(array_keys($_POST['permissions'])) : '[]';

    $resut = $db->insert($tableName)->set($data);

    if ($resut) {

        redirect(base_url('admin/groups'));
    }
}

$languages = $db->from('languages')->all();

require view('admin/groups/add');
