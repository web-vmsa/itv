<!DOCTYPE html>
<html>
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
	<!-- Verificação -->
	<?php
		if (!empty($email) && !empty($chave)) {
			// Saber se os dados estão corretos
			$check = new Newsletter();
			$check->email = $email;
			$check->chave = $chave;
			$check->status = 0;
			$checkResult = $check->check();

			if ($checkResult == true) {
				// Pegar o id pelos dados certos
				$id = $checkResult['id'];

				// Atualizar o status e redirecionar o usuário
				$update = new Newsletter();
				$update->id = $id;
				$update->status = 1;
				$update->update();

				echo '
					<script type="text/javascript">
						window.location.href="'.BASE_URL.'";
					</script>
				';
			} else {
				echo '
					<script type="text/javascript">
						window.location.href="'.BASE_URL.'";
					</script>
				';
			}
		} else {
			echo '
				<script type="text/javascript">
					window.location.href="'.BASE_URL.'";
				</script>
			';
		}
	?>
</body>
</html>