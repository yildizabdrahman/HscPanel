<?php

$table      = url(2) ?? null;
$id         = url(3) ?? null;

$deleted = $db->update($table)
    ->where('id', $id)
    ->set(['deleted_at' => date("Y-m-d H:i:s")]);


if ($deleted) {

    redirect($_SERVER['HTTP_REFERER']);
    return;
}
