<?php


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
				
			</section>

			<section>

				<article class="gauche">
					
				</article>

				<article class="droite">
					<div>
						<form action="#" method="post" accept-charset="utf-8">

							<select name="select_country">
								<option disabled="disabled" value='0' selected>Pays</option>
								<?php
									$country_tab = getCountryArray($pdo);

									foreach ($country_tab as $key => $value) {

										echo  '<option value="'.$value['Capital'].'">'.$value['Name'].'</option>';
									}		
								?>
							</select>
							<input type="submit" value="valid" placehorlder="Confirmer">
						</form>
						<article>
							<h2>Démographie</h2>
							<?php
								if ($_POST['select_country'] != 0) {
									$country_code = getCountryCode($pdo, $_POST['select_country']);

									$city_info    = getCountryInfo($pdo, $_POST['select_country']);
									echo " Capitale : ".$city_info['Name']."<br>";
									$taller_city = getTallerCity($pdo,$country_code['Code']);
									echo " Ville la plus habitée : ".$taller_city['Name'];
								}
									
							?>
						</article>
					</div>
				</article>
				
			</section>
			
		</main>
		
	</body>
</html>