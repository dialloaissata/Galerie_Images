<!-- 
    Ce code php inclu le fichier:
    "langue.php": pour changer la langue (fr, en)
-->
<?php
require_once "./assets/template/langue.php";
?>
<!DOCTYPE html>
<html>

<!--   ...........HEAD..............  -->

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="./assets/css/form.css" />
	<link rel="stylesheet" href="./assets/css/style_header.css" />

	<script src="./assets/js/form.js" defer></script>
	<script src="./assets/js/script_nav.js" defer></script>
	<script src="./assets/js/lang.js?parent=form.php" defer></script>

	<title><?= $trad["formulaire"]["titre"] ?></title>
</head>

<body>
	<!--   ...........HEADER..............  -->
	<header>
		<?php
		require_once "./assets/template/nav.php";
		?>
	</header>

	<!--   ...........MAIN..............  -->
	<main>
		<div class="form">
			<h2><?= $trad["formulaire"]["h1"] ?></h2>
			<form action="/assets/php/post.php" method="post">
				<label for="nom"><?= $trad["formulaire"]["name"] ?></label>
				<input type="text" id="nom" name="nom" required>

				<label for="email"><?= $trad["formulaire"]["email"] ?></label>
				<input type="email" id="email" name="email" required>

				<label for="message"><?= $trad["formulaire"]["message"] ?></label>
				<textarea id="message" name="message" required></textarea>

				<button type="submit"><?= $trad["formulaire"]["send"] ?></button>
			</form>
		</div>

		<div class="form">
			<h2><?= $trad["formulaire"]["h2"] ?></h2>
			<form action="/assets/php/get.php" method="get">
				<label for="nom"><?= $trad["formulaire"]["name"] ?></label>
				<input type="text" id="nomGet" name="nom" required>

				<label for="email"><?= $trad["formulaire"]["email"] ?></label>
				<input type="email" id="emailGet" name="email" required>

				<label for="message"><?= $trad["formulaire"]["message"] ?></label>
				<textarea id="messageGet" name="message" required></textarea>

				<button type="submit"><?= $trad["formulaire"]["send"] ?></button>
			</form>
		</div>

	</main>
</body>

</html>