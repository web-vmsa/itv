<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- Primary Meta Tags -->
	<title>ITV — Instituto Transformando Vidas</title>
	<meta charset="utf-8">
	<meta name="title" content="ITV — Instituto Transformando Vidas">
	<meta name="description" content="O ITV é uma instituição localizada em Manaus que visa ajudar crianças carentes e influenciar uma visão mais solidária nas pessoas.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo BASE_URL; ?>">
	<meta property="og:title" content="ITV — Instituto Transformando Vidas">
	<meta property="og:description" content="O Instituto Transformando Vidas é uma instituição localizada em Manaus que visa ajudar crianças carentes e influenciar uma visão mais solidária nas pessoas.">
	<meta property="og:image" content="<?php echo BASE_URL; ?>assets/imgs/logotipo-itv.png">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="<?php echo BASE_URL; ?>">
	<meta property="twitter:title" content="ITV — Instituto Transformando Vidas">
	<meta property="twitter:description" content="O Instituto Transformando Vidas é uma instituição localizada em Manaus que visa ajudar crianças carentes e influenciar uma visão mais solidária nas pessoas.">
	<meta property="twitter:image" content="<?php echo BASE_URL; ?>assets/imgs/logotipo-itv.png">

	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">

	<!-- Favicon -->
	<link rel="icon" href="<?php echo BASE_URL; ?>assets/imgs/favicon.png" type="image/x-icon" />
</head>
<body>
	<!-- Menu da rolagem -->
	<header class="menu-rolagem">
		<div class="logotipo">
			<a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>assets/imgs/Logo_ITV-removebg-preview.svg" alt="Logotipo / ITV"></a>
		</div>

		<nav class="menu-rolagem--menu">
			<a href="<?php echo BASE_URL; ?>sobre">
				<div class="menu-rolagem--item">NOSSA HISTÓRIA</div>
			</a>
			<a href="<?php echo BASE_URL; ?>projetos">
				<div class="menu-rolagem--item">PROJETOS</div>
			</a>
			<a href="<?php echo BASE_URL; ?>localizacao">
				<div class="menu-rolagem--item">LOCALIZAÇÃO</div>
			</a>
			<a href="<?php echo BASE_URL; ?>contato">
				<div class="menu-rolagem--item">CONTATO</div>
			</a>
			<a href="<?php echo BASE_URL; ?>galeria">
				<div class="menu-rolagem--item">GALERIA</div>
			</a>
		</nav>

		<div class="open-menu--mobile">
			<img src="<?php echo BASE_URL; ?>assets/imgs/menu.svg" alt="Menu icon">
		</div>
	</header>

	<!-- Menu lateral -->
	<aside class="menu-lateral">
		<div class="menu-lateral--top">
			<div class="menu-lateral--top-logotipo"><img src="<?php echo BASE_URL; ?>assets/imgs/Logo_ITV-removebg-preview.svg" alt="Logotipo"></div>
			<div class="menu-lateral--top-close"><img src="<?php echo BASE_URL; ?>assets/imgs/close.svg"></div>
		</div>
		<nav class="menu-lateral--menu">
			<div class="menu-lateral--menu-item">
				<a href="<?php echo BASE_URL; ?>sobre">QUEM SOMOS</a>
				<img data-submenu="quemSomos" src="<?php echo BASE_URL; ?>assets/imgs/iconmonstr-arrow-25">
			</div>
			<div class="menu-lateral--submenu quemSomos">
				<a href=""><div class="menu-lateral--submenu-item"><p>Quem somos</p></div></a>
				<a href=""><div class="menu-lateral--submenu-item"><p>Nossa história</p></div></a>
				<a href=""><div class="menu-lateral--submenu-item"><p>Diretoria</p></div></a>
			</div>
			
			<div class="menu-lateral--menu-item">
				<a href="<?php echo BASE_URL; ?>projetos">PROJETOS</a>
				<img data-submenu="projetosMenu" src="<?php echo BASE_URL; ?>assets/imgs/iconmonstr-arrow-25">
			</div>
			<div class="menu-lateral--submenu projetosMenu">
				<a href=""><div class="menu-lateral--submenu-item"><p>Atelie Vida</p></div></a>
				<a href=""><div class="menu-lateral--submenu-item"><p>Primeiro emprego</p></div></a>
				<a href=""><div class="menu-lateral--submenu-item"><p>Artesanato</p></div></a>
			</div>

			<div class="menu-lateral--menu-item">
				<a href="<?php echo BASE_URL; ?>localizacao">LOCALIZAÇÃO</a>
				<img data-submenu="localizacaoMenu" src="<?php echo BASE_URL; ?>assets/imgs/iconmonstr-arrow-25">
			</div>
			<div class="menu-lateral--submenu localizacaoMenu">
				<a href=""><div class="menu-lateral--submenu-item"><p>Complexo Eduardo Effa</p></div></a>
				<a href=""><div class="menu-lateral--submenu-item"><p>Complexo Pr. Andrew Love</p></div></a>
			</div>

			<div class="menu-lateral--menu-item">
				<a href="<?php echo BASE_URL; ?>contato">CONTATO</a>
				<img data-submenu="contatoMenu" src="<?php echo BASE_URL; ?>assets/imgs/iconmonstr-arrow-25">
			</div>
			<div class="menu-lateral--submenu contatoMenu">
				<a href="mailto:itvmanaus@gmail.com"><div class="menu-lateral--submenu-item"><p>itvmanaus@gmail.com</p></div></a>
				<a href="https://api.whatsapp.com/send?phone=92981360011"><div class="menu-lateral--submenu-item"><p>(92) 98136-0011</p></div></a>
				<a href="https://api.whatsapp.com/send?phone=92988029297"><div class="menu-lateral--submenu-item"><p>(92) 98802-9297</p></div></a>
			</div>

			<div class="menu-lateral--menu-item">
				<a href="<?php echo BASE_URL; ?>galeria">GALERIA</a>
				<img data-submenu="galeriaMenu" src="<?php echo BASE_URL; ?>assets/imgs/iconmonstr-arrow-25">
			</div>
			<div class="menu-lateral--submenu galeriaMenu">
				<a href=""><div class="menu-lateral--submenu-item"><p>Uploads recentes</p></div></a>
				<a href=""><div class="menu-lateral--submenu-item"><p>Fotos dos projetos</p></div></a>
			</div>

			<div class="menu-lateral--menu-item">
				<a href="<?php echo BASE_URL; ?>notaFiscal">NOTA FISCAL AMAZONENSE</a>
				<img data-submenu="notafiscalMenu" src="<?php echo BASE_URL; ?>assets/imgs/iconmonstr-arrow-25">
			</div>
			<div class="menu-lateral--submenu notafiscalMenu">
				<a href=""><div class="menu-lateral--submenu-item"><p>Nota fiscal amazonense</p></div></a>
			</div>
		</nav>
		<div class="menu-lateral--footer">
			<a href="">FAZER UMA DOAÇÃO</a>
			<p>@2020 | ITVidas - Todos os direitos reservados </p>
		</div>
	</aside>

	<!-- Topo -->
	<header class="topo" id="topo">
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
	<nav class="cards" id="cards">
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

	<!-- Apresentação -->
	<section class="apresentacao">
		<iframe src="https://www.youtube.com/embed/7Vxmmq8tkf0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<div class="apresentacao-texto">
			<h2>CONHEÇA O ITVIDAS</h2>
			<p>Assista o vídeo e conheça mais sobre o nosso Instituto e sobre o nosso presidente Paulo Arruda.</p>
			<a href="">HISTÓRIAS DE FÉ</a>
		</div>
	</section>

	<!-- Newsletter -->
	<section class="newsletter">
		<h2>ASSINE A NEWSLETTER</h2>
		<p>Assine a newsletter para receber todas as novidades do instituto diretamente no seu e-mail.</p>

		<form method="POST" id="newsletter">
			<input type="email" id="email" name="email" placeholder="Seu melhor e-mail">
			<button type="submit">ASSINAR >>></button>
		</form>

		<div class="mensagem">
			<p>* Verifique o seu e-mail para concluir o cadastro!</p>
		</div>
	</section>

	<!-- Rodapé -->
	<footer class="rodape">
		<div class="rodape-top">
			<div class="rodape-top--item">
				<p>Nossa história</p>
				<a href="">Quem somos</a>
				<a href="">Nossa história</a>
				<a href="">Diretoria</a>
			</div>
			<div class="rodape-top--item">
				<p>Eventos</p>
				<a href="">Segunda turma</a>
				<a href="">Evento da oração</a>
				<a href="">UEA e ITV</a>
			</div>
			<div class="rodape-top--item">
				<p>Projetos</p>
				<a href="">Projeto Atelie</a>
				<a href="">Pimeiro emprego</a>
				<a href="">Conte uma história</a>
			</div>
			<div class="rodape-top--item">
				<p>Localização</p>
				<a href="">Complexo Eduardo Effa</a>
				<a href="">Complexo Pr. Andrew Love</a>
			</div>
			<div class="rodape-top--item">
				<p>Contato</p>
				<a href="mailto:itvmanaus@gmail.com">itvmanaus@gmail.com</a>
				<a href="https://api.whatsapp.com/send?phone=92981360011">(92) 98136-0011</a>
				<a href="https://api.whatsapp.com/send?phone=92988029297">(92) 98802-9297</a>
			</div>
			<div class="logotipo-rodape">
				<img src="<?php echo BASE_URL; ?>assets/imgs/Logo_ITV-removebg-preview.svg">
			</div>
		</div>
		<div class="rodape-bottom">
			<div class="rodape-bottom--left">
				<p>@2020 | ITVidas - Todos os direitos reservados</p>
				<a href="">Política de privacidade</a>
			</div>
			<div class="rodape-bottom--right">
				<a href="https://www.instagram.com/itvidas/"><img data-img="<?php echo BASE_URL; ?>assets/imgs/iconmonstr-instagram-ccc.svg" src="<?php echo BASE_URL; ?>assets/imgs/iconmonstr-instagram-14.svg" alt="Instagram"></a>
				<a href="https://pt-br.facebook.com/itvmanaus"><img data-img="<?php echo BASE_URL; ?>assets/imgs/iconmonstr-facebook-ccc.svg" src="<?php echo BASE_URL; ?>assets/imgs/iconmonstr-facebook-4.svg" alt="Facebook"></a>
				<a href="https://www.youtube.com/channel/UCGlD8Qx5uyTyA4ZhqtRDmuA"><img data-img="<?php echo BASE_URL; ?>assets/imgs/iconmonstr-youtube-ccc.svg" src="<?php echo BASE_URL; ?>assets/imgs/iconmonstr-youtube-9.svg" alt="Youtube"></a>
				<a href="#topo"><img data-img="<?php echo BASE_URL; ?>assets/imgs/iconmonstr-arrow-ccc.svg" style="transform: rotate(-90deg);" src="<?php echo BASE_URL; ?>assets/imgs/iconmonstr-arrow-27.svg" alt="Top icom"></a>
			</div>
		</div>
	</footer>

	<!-- Scripts -->
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</body>
</html>