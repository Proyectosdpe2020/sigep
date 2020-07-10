<?php
	$servername = "localhost";
	$username = "Daniel";
	$password = "daniboy";
	$db = "sigep";
	$connectionInfo = array(
        'CharacterSet' => 'UTF-8', 
        'Database' => $db, 
        'UID' => $username, 
        'PWD' => $password
    );

	$conn = sqlsrv_connect( $servername, $connectionInfo);
?>
