<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>NOTRE-DAME DE LOURDE</title>
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>
		<div id="site-container">
			<!-- Top header infos -->
			<?php require "site-parts/header.php"; ?>

			<!-- Bloc Home -->
			<?php require "site-parts/bloc-home.php"; ?>

			<!-- Bloc 1 -->
			<?php require "site-parts/bloc-video.php";?>

			<!-- Bloc 2 -->
			<?php require "site-parts/bloc-infos.php";?>

			<!-- Bloc 3 -->
			<?php /* require "site-parts/bloc-membership.php"; */?>

			<!-- Bloc 4 -->
			<?php require "site-parts/bloc-events.php";?>

			<!-- Bloc 5 -->
			<?php require "site-parts/bloc-involve.php";?>

			<!-- Bloc 5.5 -->
			<?php require "site-parts/bloc-involve-infos.php";?>


			<!-- Bloc 6 -->
			<?php require "site-parts/bloc-question.php";?>

			<!-- Bottom Fotter infos -->
			<?php require "site-parts/footer.php";?>

			<!-- Require login -->
			<?php require "site-parts/bloc-login.php";?>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="assets/js/main-ux-ui.js"></script>
		<script src="assets/js/menu.js"></script>
		<script src="assets/js/events-blocker.js"></script>
		<script src="assets/js/form-handler.js"></script>
	</body>

</html>
