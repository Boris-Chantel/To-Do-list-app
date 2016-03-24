<?php
$user = root;
$pass = '';
$db = 'toDoList_Tasks';

$conn = mysql_connect('localhost', $user, $pass, $db);

if(!$conn) {
	die ("unable to connect");
}

$results = mysql_query( // query goes here );

if(!query) {
	die('query could not be run');
}

$row = mysql_fetch_row($result);

var_dump($row);
