<?php
$mysql_host ='localhost';
$mysql_user='root';
$mysql_pass='';
$conn_error='Could not Connect';
$mysql_db='his';


if(@!mysql_connect($mysql_host,$mysql_user,$mysql_pass)||@!mysql_select_db($mysql_db))
{
	
	die($conn_error);
	
}
else
{
	//echo'Hi Sharmal How are uu';

}



?>