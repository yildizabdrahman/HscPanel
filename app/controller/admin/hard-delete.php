<?php

$table      = url(2) ?? null;
$id         = url(3) ?? null;

$deleted = $db->delete($table)
    ->where('id', $id)
    ->done();

if ($deleted) {

    redirect($_SERVER['HTTP_REFERER']);
    return;
}
