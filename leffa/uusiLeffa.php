<?php
require_once "leffa.php";

// Onko painettu talleta-nimistä painiketta
if (isset ( $_POST ["talleta"] )) {
	$leffa = new Leffa ( $_POST ["nimi"], $_POST ["ohjaaja"], $_POST ["vuosi"], $_POST ["kesto"], $_POST ["kuvaus"] );
	
	// Tarkastetaan kentät
	$nimiVirhe = $leffa->checkNimi ();
	$ohjaajaVirhe = $leffa->checkOhjaaja ();
	$vuosiVirhe = $leffa->checkVuosi ();
	$kestoVirhe = $leffa->checkKesto ();
	// Kuvausta ei ole pakko antaa, siksi parametrina false
	$kommenttiVirhe = $leffa->checkKuvaus ( false );
}// Onko painettu peruuta-nimistä painiketta
elseif (isset ( $_POST ["peruuta"] )) {
	header ( "location: index.php" );
	exit ();
} // Sivulle tultiin etusivulta tai joltain toiselta sivulta
else {
	// Tehdään leffa oletusarvoilla (tyhjä leffa)
	$leffa = new Leffa ();
	
	// Alustetaan virhemuuttujat
	$nimiVirhe = 0;
	$ohjaajaVirhe = 0;
	$vuosiVirhe = 0;
	$kestoVirhe = 0;
	$kommenttiVirhe = 0;
}

// print_r($leffa);
?>

<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<title>Uusi leffa</title>
<style type="text/css">
label {
	width: 8em;
	display: block;
	float: left;
}

.pun {
	color: red;
}
</style>
<meta name="author" content="Jaakko Tuominen">
<meta name="author" content="Sirpa Marttila">
<link rel="stylesheet" type="text/css" href="leffa_arkisto.css">
</head>

<body>
	<header>LEFFA-ARKISTO</header>

	<nav>
		<a href="index.php">Etusivu</a>&nbsp;&nbsp;&nbsp; Uusi
		leffa&nbsp;&nbsp;&nbsp; <a href="listaaLeffat.php">Listaa leffat</a>&nbsp;&nbsp;&nbsp;
	</nav>

	<aside>
		<img src="kuvat/lumiukko.jpg" width="140" height="200" alt="Lumiukko">
		<img src="kuvat/vihreamaili.jpg" width="140" height="200"
			alt="Vihreä maili"> <img src="kuvat/hullumaailma.jpg" width="140"
			height="200" alt="Hullu maailma">
	</aside>

	<article>
		<h2>Uusi leffa</h2>
		<form action="uusiLeffa.php" method="post">

			<p>
				<label>Leffan nimi</label> <input type="text" name="nimi" size="30"
					value="<?php print(htmlentities($leffa->getNimi(), ENT_QUOTES, "UTF-8"));?>">
<?php
print ("<span class='pun'>" . $leffa->getError ( $nimiVirhe ) . "</span>") ;
?> 
</p>

			<p>
				<label>Ohjaaja</label> <input type="text" name="ohjaaja" size="30"
					value="<?php print(htmlentities($leffa->getOhjaaja(), ENT_QUOTES, "UTF-8"));?>"> 
<?php
print ("<span class='pun'>" . $leffa->getError ( $ohjaajaVirhe ) . "</span>") ;
?> 
</p>

			<p>
				<label>Valmistusvuosi</label> <input type="text" name="vuosi"
					size="4" maxlength="4"
					value="<?php print(htmlentities($leffa->getVuosi(), ENT_QUOTES, "UTF-8"));?>">
<?php
print ("<span class='pun'>" . $leffa->getError ( $vuosiVirhe ) . "</span>") ;
?>
</p>

			<p>
				<label>Kesto</label> <input type="text" name="kesto" size="4"
					maxlength="4"
					value="<?php print(htmlentities($leffa->getKesto(), ENT_QUOTES, "UTF-8"));?>">
<?php
print ("<span class='pun'>" . $leffa->getError ( $kestoVirhe ) . "</span>") ;
?>
</p>

			<p>
				<label>Kuvaus</label>
				<textarea rows="5" cols="40" name="kuvaus"><?php print(htmlentities($leffa->getKuvaus(), ENT_QUOTES, "UTF-8"));?></textarea>
<?php
print ("<span class='pun' style='vertical-align:top'>" . $leffa->getError ( $kommenttiVirhe ) . "</span>") ;
?>
</p>

			<p>
				<label>&nbsp;</label> <input type="submit" name="talleta"
					value="Tallenna"> <input type="submit" name="peruuta"
					value="Peruuta">
			</p>

		</form>

	</article>

	<footer>
		Sirpa Marttila<br> Web-ohjelmointi
	</footer>

</body>
</html>