<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- Primary Meta Tags -->
	<title>ITV — Nossa história</title>
	<meta charset="utf-8">
	<meta name="title" content="ITV — Nossa história">
	<meta name="description" content="O ITV é uma instituição localizada em Manaus que visa ajudar crianças carentes e influenciar uma visão mais solidária nas pessoas.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo BASE_URL; ?>sobre/historia">
	<meta property="og:title" content="ITV — Nossa história">
	<meta property="og:description" content="O Instituto Transformando Vidas é uma instituição localizada em Manaus que visa ajudar crianças carentes e influenciar uma visão mais solidária nas pessoas.">
	<meta property="og:image" content="<?php echo BASE_URL; ?>assets/imgs/logotipo-itv.png">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="<?php echo BASE_URL; ?>sobre/historia">
	<meta property="twitter:title" content="ITV — Nossa história">
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
				<div class="menu-rolagem--item menu-rolagem--item-active">NOSSA HISTÓRIA</div>
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

	<!-- Menu da rolagem fixado -->
	<header class="menu-rolagem--fixado">
		<div class="logotipo">
			<a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>assets/imgs/Logo_ITV-removebg-preview.svg" alt="Logotipo / ITV"></a>
		</div>

		<nav class="menu-rolagem--fixado-menu">
			<a href="<?php echo BASE_URL; ?>sobre">
				<div class="menu-rolagem--fixado-item menu-rolagem--fixado-item--active">NOSSA HISTÓRIA</div>
			</a>
			<a href="<?php echo BASE_URL; ?>projetos">
				<div class="menu-rolagem--fixado-item">PROJETOS</div>
			</a>
			<a href="<?php echo BASE_URL; ?>localizacao">
				<div class="menu-rolagem--fixado-item">LOCALIZAÇÃO</div>
			</a>
			<a href="<?php echo BASE_URL; ?>contato">
				<div class="menu-rolagem--fixado-item">CONTATO</div>
			</a>
			<a href="<?php echo BASE_URL; ?>galeria">
				<div class="menu-rolagem--fixado-item">GALERIA</div>
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

	<!-- Topo descritivo da página -->
	<div class="topo-descricao--absolute" id="topo">
		<img src="<?php echo BASE_URL; ?>assets/imgs/topo-image--historia.png">
		<div class="textoEdit">
			<h2>NOSSA HISTÓRIA</h2>
			<p>Leia abaixo a incrível história do Instituto Transformando Vidas, que começou em 2010.</p>
		</div>
	</div>

	<!-- Nossa história -->
	<div class="nossa--historia">
		<div class="nossa-historia--topo">
			<h2>COMO TUDO COMEÇOU</h2>
		</div>
		<div class="nossa-historia--descricao">
			<div class="nossa-historia--descricao-texto">
				<p>O Instituto Transformando Vidas é a realização de um sonho que teve início em Setembro de 2010, quando começamos a trabalhar com um grupo de crianças e adolescentes, debaixo de algumas mangueiras, na comunidade do Buracão no Bairro da Colônia Antônio Aleixo, Manaus/AM. O SENHOR, Nosso Deus, tornou possível este sonho e hoje contamos com o Complexo Eduardo Effa, um prédio com cerca de 1.500m2 (Um mil e quinhentos metros quadrados), com secretaria, 4 (Quatro) salas de aulas, biblioteca, consultório odontológico, laboratório de informática, cozinha, refeitório, quadra esportiva e em andamento a edificação de uma panificadora.</p>
			</div>
			<div class="nossa-historia--descricao-divisor"></div>
			<div class="nossa-historia--descricao-texto">
				<p>Nossa proposta é levar uma transformação de vidas, através do ensino de princípios e práticas, para aquelas crianças e adolescentes, oferecendo-lhes apoio pedagógico com alfabetização, língua portuguesa e matemática, cursos de informática, práticas esportivas e rodas de conversas com palestras educacionais e motivacionais. O ITV tem atendido desde 2013, a cada ano, mais de 140 (Cento e quarenta) crianças e adolescents na faixa etária de de 6 (Seis) a 16 (Dezesseis) anos, no contra turno escolar, além disso, oferecemos aos nossos beneficiários o café da manhã, almoço e lanche.</p>
			</div>
		</div>
		<div class="nossa-historia--borda"></div>
	</div>

	<!-- Dúvidas -->
	<div class="duvidas--historia">
		<h2>DÚVIDAS?</h2>
		<p>Deixe sua mensagem que entraremos em contato :)</p>
		<a href="https://api.whatsapp.com/send?phone=92981360011">CONTATO</a>
	</div>

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