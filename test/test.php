<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once("../classes/logpublisher.php");
$rabbit_credentials	= array(
							"host" 		=> 	"localhost",
							"username" 	=> 	"guest",
							"password" 	=> 	"guest",
							"port" 		=> 	"15672"
							);
echo date("Y-m-d H:i:s")."<br />";
for($i=1; $i<=10; $i++){
	/*$conn = mysql_connect("localhost","root","venky");
	mysql_select_db("erlang",$conn);
	mysql_query("Insert into logs (message) values ('Hai this is log message $i')");
	*/
	$message_publisher = LogPublisher::getInstance($rabbit_credentials);
	$message_publisher->publishMessage("Hai this is log message ".$i);
}
echo date("Y-m-d H:i:s");
exit;
?>