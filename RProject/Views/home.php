<!DOCTYPE html>
<html>
<head>
	<title>Pokedex</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo css_path ?>essentials.css">
	<link rel="stylesheet" type="text/css" href="<?php echo css_path ?>home.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<header>
		<h1>API-Pokémon</h1>
		<p><a href="<?php site_path ?>">COMO USAR</a></p>
	</header>
	
	<h1 class="title">Pesquise por um pokémon</h1>

	<section class="search_section">
		<div class="type_search_container">
			<select name="" id="search_type">
				<option value="dex_number">Dex número</option>
				<option value="name">Nome</option>
				<option value="type">Tipo</option>
				<option value="ability">Habilidade</option>
			</select>
		</div>
		<div class="input_container">
			<input type="text" name="search_input" id="search_input">
		</div>
		<div class="button_container">
			<button onclick="get_pokemon()">PESQUISAR</button>
		</div>
	</section>

	<section class="search_result" id="search_result">
		<div class="how_to_use">
			<h1 class="title">COMO USAR</h1>
			<div class="select_option_rules">
				<h1>Dex número</h1>
				<p>Digite o número do pokémon que deseja ver.</p>
				<p>Exemplo: "4" ou "04" ou "004".</p>
			</div>
			<div class="select_option_rules">
				<h1>Nome</h1>
				<p>Digite o nome(ou parte dele) do pokémon que deseja ver.</p>
				<p>Exemplo: "charizard" ou "zard".</p>
			</div>
			<div class="select_option_rules">
				<h1>Tipo</h1>
				<p>Digite o/os tipos do pokémon.</p>
				<p>Exemplo: "fire" ou "fire flying".</p>
			</div>
			<div class="select_option_rules">
				<h1>Habilidade</h1>
				<p>Digite o nome da Habilidade que o pokémon deve possuir.</p>
				<p>Exemplo: "solar-power".</p>
			</div>
			<div class="select_option_rules">
				<h1>Erros:</h1>
				<p>O banco de dados está incompleto por isso não temos o tipo "Fairy" embora temos Pokémon do desse tipo.</p>
				<p>Caso ocorra algum erro entre em contato comigo em uma das minhas redes sociais.</p>
				<p>Twitter: <a href="https://twitter.com/Gabriel_aota" target="_blank">@Gabriel_aota</a></p>
				<p>Instagram: <a href="https://www.instagram.com/gabriel.aota/" target="_blank">gabriel.aota</a></p>
			</div>
		</div>
	</section>
<script src="<?php echo javascript_path ?>ajax.js"></script>
</body>
</html>