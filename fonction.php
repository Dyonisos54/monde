<?php 

$strConnection = 'mysql:host=localhost;dbname=world;charset=utf8';

$pdo = new PDO($strConnection, 'root', '1234');

//-----------------------------------------------------------------------


function _GETselectcontinent($pdo){
	$stmt = $pdo->query('SELECT DISTINCT Continent FROM country');
	$stmt -> execute();
	$listeContinents = $stmt->fetchAll();
	return $listeContinents;
}

//  print_r(_GETselectcontinent($pdo));

