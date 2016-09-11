<?
require_once('test1.php');
if(isset($_POST['pn'])){
		$last=preg_replace('#[^0-9]#', '', $_POST['last']);
			$pn=preg_replace('#[^0-9]#', '', $_POST['pn']);
			$limt=preg_replace('#[^0-9]#', '', $_POST['limt']);
if ($pn<1) {
	$pn=1;
}
elseif ($pn>$last) {
	$pn=$last;
}
$query=mysql_query("SELECT * FROM tbl_post LIMIT '".($pn-1)*$limt."','".$limit; "'") or die('there is an errror');

$datastring='';
while ($result=mysql_fetch_assoc($query)) 
{   $i++;
	$id=$result['post_id'];
	$question=$result['post_title'];
	$chA=$result['post_description'];
	$chB=$result['post_image'];
	$chC=$result['cat_id'];
	$chD=$result['cat_id'];
	$res=$result['tag_id'];
	$datastring.=$id.'|'.$question.'|'.$chA.'|'.$chB.'|'.$chC.'|'.$chD.'|'.$res.'||';
 }

echo $datastring;
}
?>