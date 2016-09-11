<?
header('Content-Type : application/json');
$data=file_get_contents('file.json');
echo $data;
?>