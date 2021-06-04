<!DOCTYPE html>
<html>
<head>
	<!-- Primary Meta Tags -->
	<title>ITV — Instituto Transformando Vidas</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta name="title" content="ITV — Instituto Transformando Vidas">
	<meta name="description" content="O ITV é uma instituição localizada em Manaus que visa ajudar crianças carentes e influenciar uma visão mais solidária nas pessoas.">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo BASE_URL; ?>">
	<meta property="og:title" content="ITV — Instituto Transformando Vidas">
	<meta property="og:description" content="O ITV é uma instituição localizada em Manaus que visa ajudar crianças carentes e influenciar uma visão mais solidária nas pessoas.">
	<meta property="og:image" content="<?php echo BASE_URL; ?>assets/imgs/logotipo-itv.png">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="<?php echo BASE_URL; ?>">
	<meta property="twitter:title" content="ITV — Instituto Transformando Vidas">
	<meta property="twitter:description" content="With Meta Tags you can edit and experiment with your content then preview how your webpage will look on Google, Facebook, Twitter and more!">
	<meta property="twitter:image" content="<?php echo BASE_URL; ?>assets/imgs/logotipo-itv.png">

	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">

	<!-- Favicon -->
	<link rel="icon" href="<?php echo BASE_URL; ?>assets/imgs/favicon.png" type="image/x-icon" />
</head>
<body>
	<!-- Topo -->
	<header class="topo">
		<div class="logotipo">
			<a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>assets/imgs/Logo_ITV-removebg-preview.svg" alt="Logotipo / ITV"></a>
		</div>

		<nav class="menu">
			<a href="<?php echo BASE_URL; ?>sobre">
				<div class="menu-item">NOSSA HISTÓRIA</div>
			</a>
			<a href="<?php echo BASE_URL; ?>projetos">
				<div class="menu-item">PROJETOS</div>
			</a>
			<a href="<?php echo BASE_URL; ?>localizacao">
				<div class="menu-item">LOCALIZAÇÃO</div>
			</a>
			<a href="<?php echo BASE_URL; ?>contato">
				<div class="menu-item">CONTATO</div>
			</a>
			<a href="<?php echo BASE_URL; ?>galeria">
				<div class="menu-item">GALERIA</div>
			</a>
		</nav>

		<div class="open-menu--mobile">
			<img src="<?php echo BASE_URL; ?>assets/imgs/menu.svg" alt="Menu icon">
		</div>
	</header>

	<!-- Conteúdo principal -->
	<main class="conteudo-principal">
		<img src="https://img3.goodfon.com/wallpaper/nbig/7/60/manaus-braziliya-amazonas.jpg" alt="Imagem de fundo">

		<h2>INSTITUTO TRANSFORMANDO VIDAS</h2>
		<h1>FAÇA PARTE DESTA CAUSA, FAÇA UMA DOAÇÃO</h1>

		<div class="calls-to--action">
			<a href="<?php echo BASE_URL; ?>">ORANDO</a>
			<a href="<?php echo BASE_URL; ?>">VINDO</a>
			<a href="<?php echo BASE_URL; ?>">DOANDO</a>
		</div>

		<div class="desce">
			<img alt="Desce icon" src="<?php echo BASE_URL; ?>assets/imgs/seta-arrow-gif-1.gif" >
		</div>
	</main>

	<!-- Cards -->
	<nav class="cards">
		<a href="">
			<div class="card">
				<div class="card-fundo"></div>
				<img src="https://esbrasil.com.br/wp-content/uploads/2017/10/131017-Artesanato-de-Barro-Foto-Sagrilo.jpg" alt="Imagem do card">
				<div class="card-texto">
					<h2>PROJETOS</h3>
					<p>CONHEÇA TODOS OS PROJETOS DO INSTITUTO.</p>
				</div>
			</div>
		</a>
		<a href="">
			<div class="card">
				<div class="card-fundo"></div>
				<img src="https://neilpatel.com/wp-content/uploads/2017/03/emailsubscribers.jpg" alt="Imagem do card">
				<div class="card-texto">
					<h2>INFORMATIVO</h3>
					<p>LEIA O BOLETIM DE CADA MÊS DO INSTITUTO.</p>
				</div>
			</div>
		</a>
		<a href="">
			<div class="card">
				<div class="card-fundo"></div>
				<img src="https://media-manager.noticiasaominuto.com/1920/naom_584547ff916d5.jpg" alt="Imagem do card">
				<div class="card-texto">
					<h2>VOLUNTÁRIOS</h3>
					<p>CONHEÇA NOSSA EQUIPE DE VOLUNTÁRIOS.</p>
				</div>
			</div>
		</a>
		<a href="">
			<div class="card">
				<div class="card-fundo"></div>
				<img src="https://www.hopeservices.org/wp-content/uploads/SEC-HERO-donations.jpg" alt="Imagem do card">
				<div class="card-texto">
					<h2>DOE</h3>
					<p>FAÇA PARTE A APOIE A NOSSA CAUSA.</p>
				</div>
			</div>
		</a>
		<a href="">
			<div class="card">
				<div class="card-fundo"></div>
				<img src="https://cdn.diferenca.com/imagens/pessoa-fisica-e-pessoa-juridica-og.jpg" alt="Imagem do card">
				<div class="card-texto">
					<h2>APOIADORES (FÍSICOS)</h3>
					<p>VEJA QUEM JÁ AJUDOU A INSTITUIÇÃO.</p>
				</div>
			</div>
		</a>
		<a href="">
			<div class="card">
				<div class="card-fundo"></div>
				<img src="https://www.dataa.com.br/wp-content/uploads/2018/10/empresas-01.png" alt="Imagem do card">
				<div class="card-texto">
					<h2>APOIADORES (JURÍDICOS)</h3>
					<p>VEJA AS EMPRESAS QUE JÁ AJUDARAM.</p>
				</div>
			</div>
		</a>
	</nav>

	<!-- Scripts -->
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</body>
</html>