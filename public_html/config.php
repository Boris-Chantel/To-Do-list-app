
<?php
	$user = root;
	$pass = '';
	$db = 'toDoList_Tasks';

$conn = mysql_connect('localhost', $user, $pass, $db) or die ("unable to connect");

echo "Great Work!!!";

?>