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
		<title>99 Desires</title>
		<link rel="stylesheet" href="../css/styles.css" type="text/css" media="screen">
		<script type="text/javascript" src="../js/jquery/jquery-3.3.1.min.js"></script>
		<script type="text/javascript">
	    $(document).on('click', '.jq-post', function(e) {
				e.preventDefault()

				var action = $(this).attr('href');

				if(action == 'add'){
					var new_desire = $(".new-desire").val();
					var content = $('#list-99').html();
					content += '<li>' + new_desire + ' - <a href="remove" class="jq-post accomplished">Accomplished</a></li>';
				} else if (action == 'remove'){
					$(this).parent().remove()
					var content = $('#list-99').html();
				}

				$.ajax({
					method: "POST",
					url: "insert.php",
					data: { content: content, lang: 'en' },
					success: function(data){
						location.reload();
					}
				});

	    });

			$( document ).ready(function() {

				$.ajax({
					url: 'content.en.txt',
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
					<a href="about" class="about">About</a> |
					<a href="how-to" class="how-to">How To</a> |
					<a href="https://matteobersani.com">Contact</a>
				</div>
			</div>

			<div class="title">
				<div class="left">
					<h1><a href="http://matteobersani.com/projects/99-desires">99 Desires</a></h1>
				</div>
			</div>


			<div id="info-page">
				<div class="info-box" id="about">
					<p>
						<strong>99 desires</strong> is a tool to list you desires (or bucket list). With this tool there also given to you an "How To" guide with suggestions on how to write a desire and to use this tool. The main suggestion is to <strong>don't be attached to the results</strong>.
					</p>
				</div>
				<div class="info-box" id="how-to">
					<p>
						<strong>How To</strong><br>
						<li>You can use this How To like as suggestions, of course</li>
						<li>Why 99? It's a big number like another. It's because it force to think big. Some people can think just to a few desires and most of them are about objects, so this is also an exercise.</li>
						<li>Start every desire with "I want". Don't use "I wish" or "If I can".</li>
						<li>Max 14 words (about). You have to declare every desire with only a breath.</li>
						<li>All is possible: think big and say welcome also to strange desires.</li>
						<li>It's your list, no one need to see it.</li>
						<li>Read the list at least once per day.</li>
						<li>Work to make it real but don't force, do thing with joy and be patience.</li>
						<li>Ask (write) for YOU and not for others. It's your list (VERY IMPORTANT!).</li>
						<li>Use positive affirmations. Don't write what you don't want but what you want (VERY IMPORTANT!).</li>
						<li> You don't need to desire nothing. This is the true happiness! Just use your desires to learn, play, travel, do something... to live. "Life is a journey, not a destination". (VERY, VERY, VERY IMPORTANT!)</li>
						<li>Have fun!</li>
					</p>
				</div>
			</div>

			<p>
				<div class="form-container">
					<strong>New Desire:</strong>
					<p>
						<input type="text" class="form-add new-desire" name="new-desire" vlue="" />
						<br>
						<a href="add" class="jq-post"><button class="form-add green">Add</button></a>	
					</p>
				</div>
			</p>

			<strong>The list:</strong>
			<ol class="list-99" id="list-99">

			</ol>

			<p class="quote">
				"May let some desires be like the polar star: it's unreachable but it shows us the way". Unknown
			</p>

		</div>

	</body>

</html>