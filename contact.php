<?php

	$user = 'root';
	$pass = 'server';
	$db = 'contactdb';

	$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
	echo "Hello World!";

?>