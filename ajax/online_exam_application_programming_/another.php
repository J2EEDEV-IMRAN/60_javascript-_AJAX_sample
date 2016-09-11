<?
require_once('test1.php');
if(isset($_POST['pn'])){
		$last=preg_replace('#[^0-9]#', '', $_POST['last']);
			$pn=preg_replace('#[^0-9]#', '', $_POST['pn']);
if ($pn<1) {
	$pn=1;
}
elseif ($pn>$last) {
	$pn=$last;
}
$query=mysql_query("SELECT id,question,chA,chB,chC,chD,result FROM users WHERE id='".$pn."'") or die('there is an errror');

$datastring='';
while ($result=mysql_fetch_assoc($query)) 
{   $i++;
	$id=$result['id'];
	$question=$result['question'];
	$chA=$result['chA'];
	$chB=$result['chB'];
	$chC=$result['chC'];
	$chD=$result['chD'];
	$res=$result['result'];
	$datastring.=$id.'|'.$question.'|'.$chA.'|'.$chB.'|'.$chC.'|'.$chD.'|'.$res.'||';
 }

echo $datastring;
}
?>