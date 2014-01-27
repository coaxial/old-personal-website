<!doctype html>
<html lang="en">
<head>
	<?php require 'includes/head.php'; ?>
	<link href="/css/resume.css" rel="stylesheet">
	<title>Pierre-Yves Poujade, junior developer — Résumé</title>
</head>
<body>
	<?php require 'includes/navbar.php'; ?>
	<?php
		function printResume($language) {
			return readfile($_SERVER['DOCUMENT_ROOT'].'/assets/resume_'.$language.'.html');
		}

		if (isset($_GET['lang'])) {
			$lang = $_GET['lang'];
		} else {
			$lang = 'en';
		}

		switch ($lang) {
			case 'fr':
			case 'francais':
				printResume('fr');
				break;
			case 'en':
			case 'english':
				printResume('en');
				break;
			default:
				printResume('en');
				break;
		}
	?>

	<?php require 'includes/footer.php'; ?>
</body>
</html>