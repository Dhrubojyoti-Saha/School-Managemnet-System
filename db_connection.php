<?php

session_start();
$HostName='localhost';
$UserName='root';
$Password='';
$db_name='school_db';

$FlatConn = new mysqli($HostName,$UserName,$Password,$db_name);

if($FlatConn -> connect_error !=''){
	die($FlatConn -> connect_error());
}
?>
