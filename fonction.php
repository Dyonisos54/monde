<?php
//Nombre totale de cite
function getNbCities($pdo){
		$sql = 'SELECT COUNT(Name) FROM city';
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
}
//population totale
function getPopulationTot($pdo){
	$sql = 'SELECT SUM(Population) FROM country';
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetch(PDO::FETCH_ASSOC);
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
	return $stmt->fetch(PDO::FETCH_ASSOC);
}

//nombre de monarchie SELECT * FROM country WHERE GovernmentForm LIKE '%monarchy%' 
function getMonarchie($pdo){
	$sql = 'SELECT COUNT(*) FROM country WHERE GovernmentForm LIKE :id';
	$stmt = $pdo->prepare($sql);
	$stmt -> bindValue(':id',"%".'monarchy'."%");
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>