<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Leffa arkisto</title>
<meta name="keywords" content="Leffa" />
<meta name="author" content="Jaakko Tuominen">
<meta name="author" content="Sirpa Marttila">
<link rel="stylesheet" type="text/css" href="leffa_arkisto.css">
</head>

<body>

	<header>LEFFA-ARKISTO</header>

	<nav>
		Etusivu &nbsp;&nbsp;&nbsp; <a href="uusiLeffa.php">Uusi leffa</a>&nbsp;&nbsp;&nbsp;
		<a href="listaaLeffat.php">Listaa leffat</a>&nbsp;&nbsp;&nbsp;
	</nav>

	<aside>
		<img src="kuvat/lumiukko.jpg" width="140" height="200" alt="Lumiukko">
		<img src="kuvat/vihreamaili.jpg" width="140" height="200"
			alt="Vihreä maili"> <img src="kuvat/hullumaailma.jpg" width="140"
			height="200" alt="Hullu maailma">
	</aside>

	<article>
		<h2>Tervetuloa k&auml;ytt&auml;m&auml;&auml;n leffa-arkistoa</h2>

<?php
// Jos kyslymerkkijonossa on lisatty ja nimi
// Tarkoittaa siis sitä, että tänne tultiin tietojen näyttösivulta
// eli lisättiin uusi elokuva
if (isset ( $_GET ["lisatty"] ) && isset ( $_GET ["nimi"] )) {
	print ("<p>Lisättiin uusi elokuva " . $_GET ["nimi"] . ".</p>") ;
} // Muussa tapauksessa tutkitaan, onko evästeitä.
// Näytetään evästeestä viimeisimmän kyseisellä koneella lisätty elokuva ja lisäyspäivä
else if (isset ( $_COOKIE ["elokuva"] ) && isset ( $_COOKIE ["aika"] )) {
	print ("<p>Viimeisin lisäämäsi elokuva oli " . $_COOKIE ["elokuva"] . " " . $_COOKIE ["aika"] . ".</p>") ;
}
?>

</article>

	<footer>
		Sirpa Marttila<br> Web-ohjelmointi
	</footer>

</body>
</html>

