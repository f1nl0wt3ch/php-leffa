<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<title>Kaikki leffat</title>
<meta name="keywords" content="Leffa" />
<meta name="author" content="Jaakko Tuominen">
<meta name="author" content="Sirpa Marttila">
<link rel="stylesheet" type="text/css" href="leffa_arkisto.css">
</head>

<body>
	<header>LEFFA-ARKISTO</header>
	<nav>
		<a href="index.php">Etusivu</a>&nbsp;&nbsp;&nbsp; <a
			href="uusiLeffa.php">Uusi leffa</a>&nbsp;&nbsp;&nbsp; Listaa
		leffat&nbsp;&nbsp;&nbsp;
	</nav>

	<aside>
		<img src="kuvat/lumiukko.jpg" width="140" height="200" alt="Lumiukko">
		<img src="kuvat/vihreamaili.jpg" width="140" height="200"
			alt="Vihreä maili"> <img src="kuvat/hullumaailma.jpg" width="140"
			height="200" alt="Hullu maailma">
	</aside>
	<article>
		<h2>Kaikki leffat</h2>
<?php
try {
	require_once "leffaPDO.php";
	
	// Tehdään tietokanta-luokan olio
	$kantakasittely = new leffaPDO ();
	
	// Kutsutaan tietokantaluokan metodia, mikä hakee kaikki leffat
	// Metodi palauttaa oliotaulukon
	$rivit = $kantakasittely->kaikkiLeffat ();
	
	// Käydään oliotaulukko läpi
	foreach ( $rivit as $leffa ) {
		// $leffa on oliotaulukosta otettu yksittäinen Leffa-luokan olio
		print ("<p>Nimi: " . $leffa->getNimi ()) ;
		print ("<br>Ohjaaja: " . $leffa->getOhjaaja ()) ;
		print ("<br>Vuosi: " . $leffa->getVuosi ()) ;
		print ("<br>Kuvaus: " . $leffa->getKuvaus () . "</p>\n") ;
	}
} catch ( Exception $error ) {
	// Jos tuli jokin virhe, ohjataan selain virheen näyttösivulle
	header ( "location: virhe.php?sivu=Listaus&virhe=" . $error->getMessage () );
	exit ();
}

?>
</article>
	<footer>
		Sirpa Marttila<br> Web-ohjelmointi
	</footer>
</body>
</html>
