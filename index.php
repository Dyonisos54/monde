<?php


	$dsn = 'mysql:host=localhost;dbname=world;charset=utf8';
	$pdo = new PDO($dsn, 'root', 'azertypoiu');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	require "fonction.php";
	
	$NbCities = getNbCities($pdo);
	$NbContinent =  getnbContinent($pdo);
	$NbPopulation = getPopulationTot($pdo);
	$Nbcountry = getNbcountry($pdo);
	$Nbmonarchy = getMonarchie($pdo);
	$NbMonarchieAsia = getMonarchieAsia($pdo);
	$NbMonarchieAfrica = getMonarchieAfrica($pdo);
	$nbMonarchieOceania = getMonarchieOceania($pdo);



?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Le Monde </title>

	<link rel="stylesheet" href="style.css">

</head>
	<body>

		<main>

			<section> <!-- Information sur le monde -->
				
				<div>
					<h1>Monde</h1>
					<ul>
						<li>Population totale : <?php echo $NbPopulation[0]; ?></li>
						<li>Nombre de ville enregistrée : <?php echo $NbCities[0]; ?></li>
						<li>Nombre de pays : <?php echo $Nbcountry[0];?></li>
						<li>Nombre de continents : <?php echo $NbContinent[0]; ?></li>
						<li>Nombre de monarchies : <?php echo $Nbmonarchy[0][0]; ?></li>
					</ul>
				</div>
				<div>
					<h1>Monarchie non constitutionnelle</h1>
					<ul>
						<li>Asia : <?php echo $NbMonarchieAsia[0]; ?></li>
						<li>Africa : <?php echo $NbMonarchieAfrica[0];?></li>
						<li>Oceania : <?php echo $nbMonarchieOceania[0];?></li>
					</ul>
				</div>	

			</section>

			<section> <!-- Eric -->

				<form action="#" method="POST" accept-charset="utf-8">
					
					

					<article class="gauche"> <!-- paragraphe gauche sur les continents -->
						
						<select name="continent">

							<option disabled="disabled" value="0" selected >Continent</option> <!-- selection du continent dans la base de donnée -->
							<?php 	

								$listeContinents = _GETselectcontinent($pdo);
										foreach ($listeContinents as $key => $value) {
											echo '<option  value="'.$value['Continent'].'" selected >'.$value['Continent'].'</option>';
	
								}

							?>

						</select>

						<aside> <!-- Information donnée en selectionnant le continent -->

							<h3>Démographie</h3>

							<p>Nombre de pays : <?php ?></p>
							<p>Population : <?php ?></p>
							<p>Surface totale : <?php ?> (<?php ?>%de la surface totale habitée)</p>
							<p>Pays le plus habité : <?php ?></p>
							<p>Pays ayant la plus grande espérance de vie : <?php ?></p>
							<p>Espérance de vie moyenne : <?php ?></p>

							<h3>Economie</h3>

							<p>Richesse créée : <?php ?> M$</p>
							
						</aside>

						<div class="clearfix"></div>  <!-- Rétablie le flus -->

					</article>

					<article class="droite"> <!-- Paragraphe droite sur les pays -->

						
					</article>
					
				</form>


			</section>
			
		</main>
		
	</body>
</html>