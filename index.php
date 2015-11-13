<?php


require "fonction.php";

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