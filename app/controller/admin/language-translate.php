<?php

$id = url(2);
$language = $db->from('languages')->where('id', $id)->first();
$language['title'] = json_decode($language['title']);

$filePath = dir . '/app/languages/' . $language['code'] . '/lang.php';

$myfile = file($filePath);
$rows = count($myfile);

if(post('submit')){

$text = trim($_POST['translate_text']);

$myfile = fopen($filePath, "w") or die("Unable to open file!");
fwrite($myfile, $text);
fclose($myfile);

redirect(base_url('admin/language-translate/').$id);
}

require view('admin/languages/language-translate');
