<?php 
$databaseConnection = null;
function getConnection(){
	$hostname = "localhost"; 
	$database = "register"; 
	$userName = "root"; 
	$password = ""; 
	global $databaseConnection;
	$databaseConnection = @mysql_connect($hostname, $userName, $password) or die(mysql_error()); 
	mysql_query("set names 'gbk'");
	@mysql_select_db($database, $databaseConnection) or die(mysql_error());

}
function closeConnection(){
	global $databaseConnection;
	if($databaseConnection){
		mysql_close($databaseConnection) or die(mysql_error());
	}
}
?>