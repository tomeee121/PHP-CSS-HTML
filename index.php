<?php
require_once "./config.php";
?>

<!DOCTYPE html>
<html lang="pl">

<head>

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
	<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200;1,300&family=Roboto+Mono:ital,wght@1,200&display=swap" rel="stylesheet">
</head>

<body>
	<header>
		<h1 class="header"> Sposoby na uzyskanie energii ze źródeł odnawialnych </h1>
		<ul style="text-align: center"; class="menu">
				<li class="btn btn-dark"><a href="index.php" target="_blank">Strona główna</a></li>
				<li class="btn btn-dark"><a href="Rekuperacja.html" target="_blank">Rekuperacja</a></li>
				<li class="btn btn-dark"><a href="Pompy_ciepła.html" target="_blank">Pompy ciepła - energia z wnętrza Ziemi</a></li>
				<li class="btn btn-dark"><a href="Fotowoltaika.html" target="_blank">Fotowoltaika</a></li>
				<li class="btn btn-dark"><a href="Kolektor_słoneczny.html" target="_blank">Kolektor słoneczny</a></li>
				<li class="btn btn-dark"><a href="Wiatraki.php" target="_blank">Obliczenia, teoria - energia wiatrowa</a></li>
				<li class="btn btn-dark"><a href="kalkulator.html" target="_blank">Kalkulacje js</a></li>

				
					<div style="text-align: center"; class="dropdown">
						<button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
						Linki zewnętrzne
						</button>

							<div style="text-align: center"; class="dropdown-menu">
							<li><a class="dropdown-item" href="https://pl.wikipedia.org/wiki/Odnawialne_%C5%BAr%C3%B3d%C5%82a_energii">Definicja</a>
							<a class="dropdown-item" href="https://www.cire.pl/pokaz-pdf-%252Fpliki%252F2%252F2017%252Fbielas_bledzinska_paska_oze_w_polsce.pdf">Perspektywy rozwoju branży</a>
							<a class="dropdown-item" href="https://www.gramwzielone.pl/energia-sloneczna/21908/10-czy-30-lat-jaka-jest-rzeczywista-stopa-zwrotu-mikroinstalacji">Szacunkowy czas zwrotu inwestycji w fotowoltaikę</a></li>
							</div>
					</div>
				
			</ul>
	</header>

	<main>
		<article>
			<section>
				<div class="opis">
					<header>
						<h1><br>Witam na stronie poświęconej technologiom w dziedzinie energetyki, będących
							przyszłościowym i neutralnym klimatycznie rozwiązaniem.</h1>
						<p>Odnawialne źródła energii wykorzystują w procesie przetwarzania energię występującą w
							postaci:</p>
						<ol class="custom-list">
							<li>promieniowania słonecznego</li>
							<li>wiatru</li>
							<li>wody</li>
							<li>biomasy</li>
							<li>ciepła wnętrza Ziemi</li>
						</ol>
						<p> Istnieje możliwość wykorzystania również odpadów komunalnych i przemysłowych - ścieki czy po
							prostu
							śmieci. Źródła energii odnawialnej są praktycznie niewyczerpalne. Najłatwiej dostępne są
							zasoby:</p>
						<ul>
							<li>energii promieniowania słonecznego</li>
							<li>biomasy</li>
						</ul>
						</p>
						<p>Natomaist w przypadku energii wiatrowej
							konieczny jest dobór odpowiedniego miejsca, analizy pływów wiatrowych w celu doboru
							wielkości, typu wiatraka. Częstym problemem jest również montaż (offshore).
						</p>
						<p>Stałym trendem w ostatnich latach, oprócz spadku cen energii elektrycznej wytwarzanej w
							instalacjach fotowoltaicznych w aukcjach OZE, jest także wzrost średniej ceny sprzedaży
							energii
							elektrycznej na rynku konkurencyjnym. W trzecim kwartale 2020 roku wyniosła ona 257,98
							zł/MWh, czyli najwięcej w czasie funkcjonowania systemu aukcyjnego.</p>
						<table class="table table-dark">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Lata</th>
									<th scope="col">zł/MWh</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>2015</td>
									<td>169.99</td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>2016</td>
									<td>169.70</td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>2017</td>
									<td>163.70</td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>2018</td>
									<td>194.30</td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>2019</td>
									<td>254.44</td>
								</tr>
								<tr>
									<th scope="row">6</th>
									<td>III kwartał 2020</td>
									<td>257.98</td>
								</tr>
							</tbody>
						</table>
						<div>
							<form method="POST" action="./">
								<input type="hidden" name="form_number" value="0">
								<p class="my-5">
									W przypadku zainteresowania ofertą współpracy - proszę w celu orientacyjnym wypełnić
									formularz
									aby poznać ceny budowy instalacji OŹE dla domu 4-osobowego, o powierzhcni 130 metrów
									kwadratowych
								</p>
								<input type="checkbox" name="Fotowoltaika" value="1"> Instalacja fotowoltaiczna
								<input type="checkbox" name="Pompy" value="1"> Pompy ciepła
								<input type="checkbox" name="Rekuperacja" value="1"> Rekuperacja
								<input type="submit" value="Wyślij">
							</form>
							<?php
							require_once "./kalkulacje.php";
							?>
						</div>
						<h2>
							<p>Zapraszam do nawiązania kontaktu w celach biznesowych - dodaj załącznik u dołu strony (do
								20 mb wielkości pliku)oraz wypełnienia formularza</p>
						</h2>
					</header>
				</div>

				<div class="zdjęcie">
					<figure>
						<img src="OŹE.jpg" alt="OŹE" width="600px" height="600px">
						<figcaption>via http://podr.pl/doradztwo/odnawialne-zrodla-energii/ </figcaption>
					</figure>
				</div>

				<div style="text-align: center" ;>

					<br></br>
					<form action="./" method="POST" name="formularz">
						<input type="hidden" name="form_number" value="1">
						Współpraca krótko-
						<input type="radio" name="współpraca" value="krótko" onkeydown="next()" required>
						/długoterminowa
						<input type="radio" name="współpraca" value="długo" onkeydown="next()" required>
						<br></br>
						Typ usługi (doradztwo/instalacja/kalkulacja kosztów):
						<input class="form-control col-4" type="text" name="Typ" id="changeColor"
							style="margin: auto auto" onkeydown="next()" required/>
						<br></br>
						Typ usługi Osoba fizyczna/firma:
						<input class="form-control col-4" type="text" name="Osoba" id="changeColorSecond"
							style="margin: auto auto" onkeydown="next()" required />
						<input class="btn btn-primary m-2" type="submit" id="buttonDemo" value="Wyślij" required />
					</form>
					<div style="margin-left: auto; margin-right: auto; width: 400px" ;>
					<?php
					require_once "./info.php";
					?>
					<br></br>
					</div>

					<form action="./" method="POST" name="formularzDrugi" enctype="multipart/form-data">
						<input type="hidden" name="form_number" value="2">
						<input style="font-size: 18px" type="file" name="file">
						<button style="font-size: 18px" type="submit" name="submit">Załącz dokument tekstowy</button>
					</form>
					<?php
					require_once "./upload.php";
					?>
				</div>

				</div>
			</section>
		</article>
	</main>
</body>


<script>
	
	
		var id = ["changeColorSecond", "changeColorSecond"];
		function next() {
		try {
			for(var i=0; i<id.length; i++) {
				if(e.keyCode === 13 && e.target.id === id[i]) {
					document.querySelector('#${id[i+1]}').focus();
				}
			}
		} catch(err) {}
	}
	
</script>


<script src="script.js"></script>

</html>