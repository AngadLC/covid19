<?php
$server = 'localhost';
$username = 'postgres';
$password = 'angad';
$db_name = 'covid19';
$dbconn = pg_connect("host=$server port=5432 dbname=$db_name user=$username password=$password")

?>