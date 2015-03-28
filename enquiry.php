<?php
 $con=mysql_connect('localhost' ,'dbstopnshop',"letsdoit");
if(!$con)
{
die ('could not coonect'.mysql_error());
}
mysql_select_db("dbstopnshop",$con);
$sql="insert into submitform(name,email,message) values('$_POST[name]','$_POST[email]','$_POST[message]')";
if(!mysql_query($sql,$con))
{
die('Error:'.mysql_error());
}
header("location:thankyou/enq.html"); 
mysql_close($con);
?>
