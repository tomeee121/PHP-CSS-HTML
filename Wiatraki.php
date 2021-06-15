<!DOCTYPE html>
<html lang="pl">
<head> 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<title>Odnawialne źródła energii</title>
	<meta name="description" content="Strona informacyjna o odnawialnych źródłach energii!">
	<meta name="keywords" content="OŹE, odnawialne źródła energii">
	<meta name="author" content="Tomasz Borowski">
	<link rel="stylesheet" href="main.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link
		href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200;1,300&family=Roboto+Mono:ital,wght@1,200&display=swap"
		rel="stylesheet">
</head>
<body>
	<header>
		<h1 class="naglowek"> Sposoby na uzyskanie energii ze źródeł odnawialnych </h1>
		<nav>
			<ul class="menu">
				<li><a href="./" class="nav-element">Strona główna</a></li>
				<li><a href="kalkulator.html" class="nav-element">Kalkulator zużycia kWh</a></li>
				<li id="knowledge" class="expandable">
					<div class="nav-element">
						<p>Wiedza</p>
						<div class="expandable-element">
							<ul>
								<li><a href="Rekuperacja.html">Rekuperacja</a></li>
								<li><a href="Fotowoltaika.html">Fotowoltaika</a></li>
								<li><a href="Kolektor_słoneczny.html">Kolektor słoneczny</a></li>
								<li><a href="Biogazowanie.html">Biogazowanie</a></li>
								<li><a href="Pompy_ciepła.html">Pompy ciepła - energia z wnętrza Ziemi</a></li>
								<li><a href="Wiatraki.php">Elektrownie wiatrowe</a></li>
							</ul>
						</div>
					</div>
				</li>
				<li id="more-links" class="expandable">
					<div class="nav-element">
						<p>Linki zewnętrzne</p>
						<div class="expandable-element">
							<ul>
								<li><a target="_blank"
										href="https://pl.wikipedia.org/wiki/Odnawialne_%C5%BAr%C3%B3d%C5%82a_energii">Definicja</a>
								</li>
								<li><a target="_blank"
										href="https://www.cire.pl/pokaz-pdf-%252Fpliki%252F2%252F2017%252Fbielas_bledzinska_paska_oze_w_polsce.pdf">Perspektywy
										rozwoju branży</a></li>
								<li><a target="_blank"
										href="https://www.gramwzielone.pl/energia-sloneczna/21908/10-czy-30-lat-jaka-jest-rzeczywista-stopa-zwrotu-mikroinstalacji">Szacunkowy
										czas zwrotu inwestycji w fotowoltaikę</a></li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</nav>
	</header>
	
	<main>
	<article>
		<section>
			<div class="opis">
				<header>
				
					<h1>Celem stosowania pionowych siłowni wiatrowych jest z reguły spełnianie roli przydomowego, alternatywnego źródła energii elektrycznej, pozwalającej na uniezależnienie od sieci masowej dystrybucji prądu. </h1>
						<p>W przypadku domów zawierających odpowiednio ocieploną konstrukcję oraz konstrukcję pieca czyli o zredukowanych potrzebach energetycznych a także w miejscu o częstej "dostępności" wiatru posiada potencjał aby być lepszym zastosowaniem na dłuższą metę, szczególnie pod względem ekonomicznym. 
						Konstrukcja tego typu elektrowni jest tak dobrana aby przemieniać energię kinetyczną na mechaniczną a tą z kolei na elektryczną.Ilość prądu produkowanego w pionowej siłowni wiatrowej jest zależna od prędkości i częstości występującego wiatru (na co wpływ ma klimat i wysokością umieszczenia wiatraka (generalnie im wyżej tym większa wydajność). Im większa elektrownia tym bardziej opłaca się umieścić ją na maszcie, które dzisiaj sięgają nawet 100 metrów. 
						W przypadku braku zastosowania masztu należy oczywiście uważać aby struga wiatru nie była hamowana jakąś przeszkodą, tuż przed dotarciem do wirnika. 
						Gwarantowany czas działania elektrowni tego typu jest szacowany przez producentów na 25 lat. Dotyczy to jednak sytuacji serwisowania oraz konserwowania elektrowni przez właściciela (od czasu do czasu).</p>

				</header>
					
			</div>
					
						
					<br></br>
					<form action="Wiatraki.php" method="POST" name="formWiatraki" style="font-size=14px; text-align:center"; >
						<input type="hidden" name="form_number" value="3">
						Dla gęstości powietrza 1,225 kg/m<sup>3</sup> podaj wartość powierzchni w metrach kwadratowych wiatraka, przez którą przepływa strumień powietrza				
						<br>
						<input type="number" step="0.01" name="square" value="first" required>
						<br>
						Podaj średnią prędkość wiatru na wysokości i w miejscu instalacji wiatraka [m/s]
						<br>
						<input type="number" step="0.01" name="speed" value="second" required>
						<br>
						Dla wyznaczenia współczynnika Betza podaj rodzaj turbiny - pozioma/Darrieusa
						<input type="radio" name="turbineType" value="0.4" required>
						<br>
						bądź turbina o osi pionowej/Savoniusa
						<input type="radio" name="turbineType" value="0.2" required>
						<br>
						<input type="submit" id="formSubmit" value="Wyślij" />
						<br>
						<br> Ilość wyprodukowanej rocznie energii w kWh, dla danego typu turbiny i współczynników sprawności: przekładni (η<sub>m</sub>) = 0,9; generatora (η<sub>g</sub>) = 0,92; sieci elektrownianej (η<sub>s</sub>) = 0,95
					</form>
						<?php
						require_once "./wiatrak.php";
						?>
			
		</section>
	</article>
	</main>
 </body>
 <script src="script.js"></script>
</html>