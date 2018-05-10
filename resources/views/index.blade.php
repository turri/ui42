@extends('mainlayout')
 
@section('content')
	<header>
		<div class="container">
			<div class="row align-items-center">			
				<div class="col-auto mr-auto">
					<h1>
						<img src="img/logo.jpg" alt="logo" />
						<span>Effective cleaning</span>
					</h1>
				</div>
				<div class="col-auto header-right">
					<a href="/">Kontakty a cisla na oddelenia</a>
					<ul class="lang">
						<li>
							<a href="/" class="active">EN</a>
						</li>
					</ul>
					<div class="form-group">
					    <label for="search" class="sr-only">Search</label>
					    <input type="search" class="form-control" id="search" placeholder="">
					  </div>
					<button class="btn btn-success">Prihlasenie</button>
				</div>
			</div>
			<nav class="row">
				<ul>
					<li><a href="">O nas</a></li>
					<li><a href="">Zoznam miest</a></li>
					<li><a href="">Inspekcia</a></li>
					<li><a href="">Kontakt</a></li>
			</nav>
		</div>
	</header>
	
	<div class="row align-items-center" id="index">
		<div class="col">
			<h2>Vyhladat v databaze obci</h2>
			<form>
				<input class="form-control typeahead" type="text" name="city" placeholder="Zadajte nazov" autocomplete="off">
			</form>
			
		</div>
	</div>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h3>Adresa a kontakt</h3>
					<address>
						SUKL<br/>
						Kvetna 11<br/>
						825 33 Bratislava<br/>
						Ustredna:<br/>
						+421 2-984185
					</address>
					<h3>Kontakty</h3>
					<ul>
						<li><a href="">telefonne cisla</a></li>
						<li><a href="">adresa</a></li>
						<li><a href="">link</a></li>
						<li><a href="">link</a></li>
					</ul>
					<h3>Informacie pre verejnost</h3>
					<ul>
						<li><a href="">link</a></li>
						<li><a href="">link</a></li>
						<li><a href="">link</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<h3>O nas</h3>
					<ul>
						<li><a href="">link</a></li>
						<li><a href="">link</a></li>
						<li><a href="">link</a></li>
						<li><a href="">link</a></li>
						<li><a href="">link</a></li>
						<li><a href="">link</a></li>
						<li><a href="">link</a></li>
						<li><a href="">link</a></li>
						<li><a href="">link</a></li>
						<li><a href="">link</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<h3>Media</h3>
					<ul>
						<li><a href="">link</a></li>
						<li><a href="">link</a></li>
						<li><a href="">link</a></li>
					</ul>
					<h3>Databazy a servis</h3>
					<ul>
						<li><a href="">link</a></li>
						<li><a href="">link</a></li>
						<li><a href="">link</a></li>
						<li><a href="">link</a></li>
						<li><a href="">link</a></li>
						<li><a href="">link</a></li>
						<li><a href="">link</a></li>
						<li><a href="">link</a></li>
						<li><a href="">link</a></li>
						<li><a href="">link</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<h3>Drogove prekurzory</h3>
					<ul>
						<li><a href="">link</a></li>
						<li><a href="">link</a></li>
						<li><a href="">link</a></li>
						<li><a href="">link</a></li>
					</ul>
					<h3>Ine</h3>
					<ul>
						<li><a href="">Linky</a></li>
						<li><a href="">Mapa stranok</a></li>
						<li><a href="">FAQ</a></li>
						<li><a href="">Podmienky pouzivania</a></li>
					</ul>
					<h3 class="blue">Rapid alert system</h3>
					<a href="">Rychla vystrafa vyplyvajuca z nedostatkov v kvalite liekov</a>
				</div>
			</div>
	</footer>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap3-typeahead.min.js"></script>
	<script src="js/app.js"></script>
@endsection