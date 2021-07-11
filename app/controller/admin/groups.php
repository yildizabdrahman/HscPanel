<?php

$tableName = 'groups';
$nullType = 'is null';

if (url(2) && url(2) == 'trash') {
    $nullType = 'is not null';
}

$groups = $db->query('select * from ' . $tableName . ' where deleted_at ' . $nullType);

require view('admin/groups/listing');
