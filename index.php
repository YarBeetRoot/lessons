<?php
//xdebug установить

//phpinfo();exit;
$str = 'Иванов Иван Иваныч';
$delimiter = ' ';
$data = explode($delimiter, $str);
print_r($data);

$data = implode(',', $data);
$arr = [
    'bbb' => 'ggg',
    'ccc' => 'ddd'
];
var_dump($arr);

?>