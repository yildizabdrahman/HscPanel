<?php 

// $Clangs = 'fr'; //sorgudan gelen dil kodu
// $dirName = dir."/app/languages/".$Clangs;
// if(!is_dir($dirName )){
//     mkdir($dirName);
// }

// $fileName = 'lang.php';
// if(!file_exists($dirName.'/'.$fileName)){
//     touch($dirName.'/'.$fileName);
// }

// $myfile = fopen($dirName.'/'.$fileName, "w") or die("Unable to open file!");
// $txt  = '<?php'.PHP_EOL.PHP_EOL;
// $txt .=  '$lang["hasan_title"] = "Başlık";'.PHP_EOL;
// $txt .= '$lang["hasan_desc"] = "Açıklama";'.PHP_EOL;
// $txt .= '$lang["hasan_keys"] = "keyword";'.PHP_EOL.PHP_EOL;
// $txt .= '\?\>';
// fwrite($myfile, $txt);
// fclose($myfile);


require_once view('index');
