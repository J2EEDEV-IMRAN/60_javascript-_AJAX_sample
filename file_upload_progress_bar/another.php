<?
$file_name=$_FILES['file1']['name'];
$file_tmploc=$_FILES['file1']['tmp_name'];
$file_size=$_FILES['file1']['size'];
$file_type=$_FILES['file1']['type'];
$file_errormessage=$_FILES['file1']['error'];
if(!$file_tmploc){//if fiel not choosen
 echo 'Please brows a file befor clicking upload button';
 exit();
}
if(move_uploaded_file($file_tmploc,'test_uploads/'.$file_name))
{
 echo $file_name.' upload is complete';
}
else
{
 echo 'move_uploaded_file function is failed';
}
?>