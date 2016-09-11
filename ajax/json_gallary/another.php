<?
header('Content-Type : application/json');
$folder=$_POST['folder'];
$jsondata='{';
$dir=$folder.'/';
$dir_hendle=opendir($dir);
$i=0;
while ($file=readdir($dir_hendle)) {
	if(!is_dir($file) && preg_match('/.jpg|.png|.gif/i', $file))
	{   $i++;
		$src=$dir.$file;
		$jsondata.='"img'.$i.'" : {"num" : "'.$i.'","src" : "'.$src.'","name" : "'.$file.'"},';
		
	}
}
closedir($dir_hendle);
$jsondata=chop($jsondata,',');
$jsondata.='}';
echo $jsondata;
?>