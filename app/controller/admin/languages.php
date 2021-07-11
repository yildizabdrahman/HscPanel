<?php

$tableName = "languages";
$nullType = 'is null';

if (url(2) && url(2) == 'trash') {
    $nullType = 'is not null';
}

$languages = $db->query('select * from ' . $tableName . ' where deleted_at ' . $nullType);

require view('admin/languages/listing');
