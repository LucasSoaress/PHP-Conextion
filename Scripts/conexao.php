<?php
$host = "mysql.hostinger.com.br";
$user = "u864472745_teste";
$pass = "U1xeoI68u6";
$db = "u864472745_teste";



$mysqli = new mysqli($host,$user,$pass,$db) or die(mysql_error($mysqli));
$q = $mysqli;

$q->query("SET NAMES 'utf8'");
$q->query('SET character_set_connection=utf8');
$q->query('SET character_set_client=utf8');
$q->query('SET character_set_results=utf8');

?>