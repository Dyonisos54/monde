<?php
	$dsn = 'mysql:host=localhost;dbname=world;charset=utf8';
	$pdo = new PDO($dsn, 'root', '');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	require "fonction.php";
	
	$NbCities = getNbCities($pdo);
	$NbContinent =  getnbContinent($pdo);
	$NbPopulation = getPopulationTot($pdo);
	$Nbcountry = getNbcountry($pdo);
	$Nbmonarchy = getMonarchie($pdo);


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Le Monde </title>
	<link rel="stylesheet" href="">
</head>
	<body>

		<main>

			<section>
				<h1>Monde</h1>
				<ul>
					<li>Population totale : <?php echo $NbPopulation[0]; ?></li>
					<li>Nombre de ville enregistrée : <?php echo $NbCities[0]; ?></li>
					<li>Nombre de pays : <?php echo $Nbcountry[0];?></li>
					<li>Nombre de continents : <?php echo $NbContinent[0]; ?></li>
					<li>Nombre de monarchies : <?php echo $Nbmonarchy[0][0]; ?></li>
				</ul>	
			</section>

			<section>

				<article class="gauche">
					
				</article>

				<article class="droite">
					
				</article>
				
			</section>
			
		</main>
		
	</body>
</html>