<?
require_once('test1.php');
if(isset($_POST['letter'])){
	$letter=preg_replace('#[^a-z]#i', '', $_POST['letter']);
		

$query=mysql_query("SELECT id,firstname,lastname,birthdate FROM users WHERE firstname LIKE '%".$letter."%'") or die('there is an errror');

$datastring='';
while ($result=mysql_fetch_assoc($query)) 
{   $i++;
	$id=$result['id'];
	$firstname=$result['firstname'];
	$lastname=$result['lastname'];
	$birthdate=$result['birthdate'];
	$datastring.=$id.'|'.$firstname.'|'.$lastname.'|'.$birthdate.'||';
 }

echo $datastring;
}
?>