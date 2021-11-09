<!--
99 Desires is program to list and manage your dresires and dreams.
Copyright (C) 2019 Matteo Giuseppe Bersani
Email: mail@matteobersani.com

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program (see below). You can aldo see http://www.gnu.org/licenses for the original text (GNU GPL v.3).
-->
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<title>99 Desideri</title>
		<link rel="stylesheet" href="../css/styles.css" type="text/css" media="screen">
		<script type="text/javascript" src="../js/jquery/jquery-3.3.1.min.js"></script>
		<script type="text/javascript">

	    $(document).on('click', '.jq-post', function(e) {
				e.preventDefault()

				var action = $(this).attr('href');

				if(action == 'add'){
					var new_desire = $(".new-desire").val();
					var content = $('#list-99').html();
					content += '<li>' + new_desire + ' - <a href="remove" class="jq-post accomplished">Realizzato</a></li>';
				} else if (action == 'remove'){
					$(this).parent().remove()
					var content = $('#list-99').html();
				}

				$.ajax({
					method: "POST",
					url: "insert.php",
					data: { content: content, lang: 'it' },
					success: function(data){
						location.reload();
					}
				});

	    });

			$( document ).ready(function() {
				$.ajax({
					url: 'content.it.txt',
					success: function(data){
						$('#list-99').html(data);
					}
				});

				$( ".about" ).click(function(e) {
					e.preventDefault();
					$( "#about" ).toggle("slow");
				});

				$( ".how-to" ).click(function(e) {
					e.preventDefault();
					$( "#how-to" ).toggle("slow");
				});

			});
		</script>
	</head>

	<body>

		<div class="container">

			<div class="menu">
				<div class="right">
					<a href="about" class="about">Il progetto</a> |
					<a href="how-to" class="how-to">Suggerimenti</a> |
					<a href="https://matteobersani.com">Contatti</a>
				</div>
			</div>

			<div class="title">
				<div class="left">
					<h1><a href="http://matteobersani.com/projects/99-desires">99 Desideri</a></h1>
				</div>
			</div>


			<div id="info-page">
				<div class="info-box" id="about">
					<p>
						<strong>99 desideri</strong> è uno strumento per gestire una lista dei desideri. Con questo strumento ti sono donati anche dei suggerimenti per come scrivere i tuoi desideri. Il suggerimento principale è quello di <strong>non essere attaccato al compimento dei tuoi desideri, ai risultati</strong>.
					</p>
				</div>
				<div class="info-box" id="how-to">
					<p>
						<strong>Suggerimenti</strong><br>
						<li>Queste sono le inee guida suggerite, naturalmente puoi inserire i desideri a tuo piacimento</li>
						<li>Perchè 99? Il numero è indicativo. Sono tanti perchè in questo modo si è obbligati a pensare a fondo. Alcune persone possono pensare solo a qualche desiderio e molti dei quali sono solo cose, quindi è anche un esercizio.</li>
						<li>Comincia ogni desiderio con "Io voglio". Non usare "Vorrei" o "Se possibile".</li>
						<li>Usa al massimo 14 parole (circa). Usa frasi che puoi dire tutte d'un sol fiato.</li>
						<li>Tutto è possibile: sono benvenuti grandi desideri e anche quelli apparentemente assurdi.</li>
						<li>E' la tua lista, nessuno deve vederla.</li>
						<li>Leggi la lista una volta al giorno.</li>
						<li>Lavora per realizzarli senza forzare le cose, fai le cose con gioia e sii paziente.</li>
						<li>Scrivi quello che vuoi TU, non chidere per gli altri. E' la tua lista (MOLTO IMPORTANTE!).</li>
						<li>Usa affermazioni in forma positive. Non scrivere quello che non vuoi, ma quello che vuoi (MOLTO IMPORTANTE!).</li>
						<li>Non c'è bisogno di desiderare niente! questa è la vera felicità. Usa i desideri per imparare, giocare, viaggiare, fare delle cose... vivere. "Il viaggio ci rende felici, non la destinazione". (MOLTO, MOLTO, MOLTO IMPORTANTE!)</li>
						<li>Divertiti!</li>
					</p>
				</div>
			</div>

			<p>
				<div class="form-container">
					<strong>Nuovo Desiderio:</strong>
					<p>
						<input type="text" class="form-add new-desire" name="new-desire" vlue="" />
						<br>
						<a href="add" class="jq-post"><button class="form-add green">Aggiungi</button></a>	
					</p>
				</div>
			</p>

			<strong>La lista:</strong>
			<ol class="list-99" id="list-99">

			</ol>

			<p class="quote">
				"Alcuni sogni sono come la stella polare: sono irraggiungibili, ma ci indicano la via da seguire". Anonimo
			</p>

		</div>

	</body>

</html>