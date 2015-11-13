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


//Nombre totale de cite
function getNbCities($pdo){
		$sql = 'SELECT COUNT(Name) FROM city';
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		return $stmt->fetch();
}
//population totale
function getPopulationTot($pdo){
	$sql = 'SELECT SUM(Population) FROM country';
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetch();
}
//nombre de continent
function getnbContinent($pdo){
	$sql = 'SELECT COUNT(DISTINCT continent) FROM country';
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		return $stmt->fetch();
}
//nombre de pays
function getNbcountry($pdo){
	$sql = 'SELECT COUNT(Name) FROM country';
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetch();
}

//nombre de monarchie SELECT * FROM country WHERE GovernmentForm LIKE '%monarchy%' 
function getMonarchie($pdo){
	$sql = 'SELECT COUNT(*) FROM country WHERE GovernmentForm LIKE :id';
	$stmt = $pdo->prepare($sql);
	$stmt -> bindValue(':id',"%".'monarchy'."%");
	$stmt->execute();
	return $stmt->fetchAll();
}


function getMonarchieAsia($pdo){
	$sql = "SELECT COUNT(*) FROM country WHERE Continent = 'Asia' AND GovernmentForm LIKE :id";
	$stmt = $pdo->prepare($sql);
	$stmt -> bindValue(':id','monarchy');
	$stmt->execute();
	return $stmt->fetch();
}

function getMonarchieAfrica($pdo){
	$sql = "SELECT COUNT(*) FROM country WHERE Continent = 'Africa' AND GovernmentForm LIKE :id";
	$stmt = $pdo->prepare($sql);
	$stmt -> bindValue(':id','monarchy');
	$stmt->execute();
	return $stmt->fetch();
}

function getMonarchieOceania($pdo){
	$sql = "SELECT COUNT(*) FROM country WHERE Continent = 'Oceania' AND GovernmentForm LIKE :id";
	$stmt = $pdo->prepare($sql);
	$stmt -> bindValue(':id','monarchy');
	$stmt->execute();
	return $stmt->fetch();
}
