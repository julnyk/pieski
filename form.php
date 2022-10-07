<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<html lang="pl-PL">
		<title>Najbardziej wiarygodny i luksusowy portal o pieskach w Polsce</title>
		<link rel="icon" type="image/x-icon" href="../images/favicon.ico">
		<meta name="description" content="Polecane przez specjalistów rzetelne źródło wiedzy o najwspanialszej rasie ssaków. Szokujące nowiny, gorące informacje, potwierdzone informacje - tego na pewno tu nie znajdziesz!">
   		<meta name="author" content="Julia Nykiel">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <link rel="stylesheet" href="../css/mystyle.css">
	</head>
	<body>
		<div class="gora">
			<header>
				<a href="http://pieski.lol">
					<img src="../images/tlo.png?a" alt="pieski.lol" class="responsive"/>
				</a>
				<div id="pole1">
					<h3 id="tekst1"> Witaj na stronie, która łączy moje dwie największe pasje: pieski<sup>serio</sup> oraz programowanie<sup>xddd</sup>.</h3>
				</div>
				<nav>
					<ul>
						<li><a href="../index.php">Strona główna</a></li>
						<li><a href="../strefa-zodiakarzy/index.php">Strefa zodiakarzy</a></li>
						<li><a href="../kontakt/index.php">Kontakt</a></li>
					</ul>
				</nav>
			</header>
		</div>
		<div class="srodek">
			<section>
				<article>
                    <?php
                    include 'db/query.php';
                    $q = $_GET["q"];
                    $sqlquery = "SELECT * FROM psiezodiaki WHERE znak LIKE '%".$q."%';";
                    $result = query($sqlquery);
                    if ($result->count == 0) {
                        echo $q . "to nie jest znak zodiaku, głuptasie.";
                    } else {
                        while($row = $result->next()) {
							echo "<p>Twój znak zodiaku to <strong>" . $row["znak"]  . "</strong>!<br/><br/></p>" ;
                            echo "<p>Daty: " . $row["dataur"]. "<br/><br/></p>" ;
                            echo "<p>Twój zodiakalny pies to  <strong>" . $row["rasa"]. "</strong> &#128054 <br/><br/></p>" ;
                            echo "<p>Kilka słów o Tobie, mój psyjacielu: <br/>" . $row["opis"]. "<br/><br/></p>" ;
							echo "<p><a href=\"". $row["piosenka"] . "\" target=\"_blank\">Kliknij, żeby właczyć Twoją piosenkę!</a></p>";
                        }
                    }
                    ?>
				</article>
			</section>
			<aside>
				<img src="moje zdjątko" alt="To ja">
				<h4 id="omnie"> O mnie </h4>
				<p>Filolożka języka hiszpańskiego i niedoszła historyczka sztuki, zgłębiająca świat IT. Fanka wrestlingu i śląskiej sztuki prymitywnej. Zodiakalny bokser &#128521. Koneserka wczesnej epoki polskiego jutuba i entuzjastka usuwania drzwi podczas pożarów w Simsach. Właścicielka największego polskiego portalu internetowego poświęconego dopasowaniu zodiakalnemu do rasy psiura. Szukam swojej ścieżki zawodowej i nie boję się wskoczyć na głęboką wodę. Staram się nie brać życia zbyt poważnie (chyba że jesteś rekruterem, no to biorę zupełnie na poważnie). Gdybym była piosenką, to byłabym <a href="https://www.youtube.com/watch?v=B4c_SkROzzo" target="_blank">tą</a>.</p>
			</aside>
		</div>
		<div class="dol">
			<footer>
				<p>pieski.lol © 2022</p>
				<p>Strona nie wykorzystuje plików Cookies, bo jeszcze nie umie.</p>
			</footer>
		</div>
	</body>
</html>