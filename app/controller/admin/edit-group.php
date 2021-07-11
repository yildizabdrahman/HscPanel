<?php

if (url(2)) {

    $id = url(2);
}
if (post('submit')) {

    foreach ($_POST['title'] as $title) {
        if ($title == "") {
            session('error', lang('add_group_error_message'));
            redirect($_SERVER['HTTP_REFERER']);
            return;
        }
    }
    $slug = permalink($_POST['title'][$config['defaultLanguAge']]);

    $isGruop = $db->from($tableName)->where('id', $id)->first();

    if (!$isGruop['slug'] != $slug) {
        session('error', lang('add_group_duplicate_entry_message'));
        redirect($_SERVER['HTTP_REFERER']);
        return;
    }

    $data['title']       = json_encode($_POST['title']);
    $data['slug']        = permalink($_POST['title'][$config['defaultLanguAge']]);
    $data['permissions'] = isset($_POST['permissions']) && $_POST['permissions'] != "" ? json_encode(array_keys($_POST['permissions'])) : '[]';

    $resut = $db->update('groups')->where('id', $id)->set($data);

    if ($resut) {

        redirect(base_url('admin/edit-group') . '/' . $id);
    }
}

$group = $db->from('groups')->where('id', $id)->first();
$group['permissions'] = json_decode($group['permissions']);
$group['title'] = json_decode($group['title']);


$languages = $db->from('languages')->where('is_active', 1)->all();

require view('admin/groups/edit');
