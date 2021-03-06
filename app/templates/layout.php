<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>

	<link rel="stylesheet" href="<?= $this->assetUrl('css/reset.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/javascript" href="../js/admin.js">
</head>
<body>
	<div class="container">
		<header>
			<h1>Wikébec :: <?= $this->e($title) ?></h1>

			<?php if ($w_user): ?>
				<p>Bonjour <?= $w_user['username']; ?></p>
				<a href="<?= $this->url('logout'); ?>" title="deconnexion">Déconnexion</a>
			<?php endif; ?>
		</header>

		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
	</div>
</body>
</html>