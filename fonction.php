<?php 
	$strConnection = 'mysql:host=localhost;dbname=world;charset=utf8';
	$pdo = new PDO($strConnection, 'root', '');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


	function getCountryArray($pdo){
		$sql = 'SELECT Name, Capital, Code 
				FROM country ;';
		$stmt = $pdo-> prepare($sql);
		$stmt-> execute();
		$country_array = $stmt->fetchAll();
		 return $country_array;
	}

	function getCountryCode($pdo, $id_capital){
		$sql='SELECT Name, Code, Capital
				FROM country
				WHERE Capital ='.$id_capital;

		$stmt= $pdo -> prepare($sql);
		$stmt-> execute();
		$taller_city = $stmt ->fetch();
		return $taller_city;
	}

	function getCountryInfo($pdo, $capital_code){
		$sql='	SELECT ID, Name, Population 
				FROM city 
				WHERE ID = :idcapital;';
		$stmt= $pdo -> prepare($sql);
		$stmt-> bindValue(":idcapital", $capital_code);
		$stmt-> execute();
		$city_info = $stmt->fetch();
		return $city_info;
	}

	function getTallerCity($pdo, $country_code){
		$sql='SELECT Name, Population, CountryCode
				FROM city
				WHERE CountryCode = :country
				ORDER BY Population DESC 
				LIMIT 1;' ;
		$stmt= $pdo -> prepare($sql);
		$stmt-> bindValue(":country", $country_code);
		$stmt-> execute();
		$taller_city = $stmt ->fetch();
		return $taller_city;
	}


?>