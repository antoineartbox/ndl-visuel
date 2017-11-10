<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>NOTRE-DAME DE LOURDE</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>

		<div id="site-container">
			<div id="menu-linker">
				<ul>
					<div class="white-rounder"><li class="menu-home-anchor"></li></div>

					<div class="white-rounder"><li class="menu-infos-anchor"></li></div>

					<div class="white-rounder"><li class="menu-events-anchor"></li></div>

					<div class="white-rounder"><li class="menu-involve-anchor"></li></div>

					<div class="white-rounder"><li class="menu-question-anchor"></li></div>
				</ul>
			</div>
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




			<!-- Require login -->
			<?php require "site-parts/bloc-login.php";?>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="assets/js/main-ux-ui.js"></script>
		<script src="assets/js/menu.js"></script>
		<script src="assets/js/events-blocker.js"></script>
		<script src="assets/js/form-handler.js"></script>
		<script src="assets/js/form-validation.js"></script>
		<script src="assets/js/menu-behaviour.js"></script>
		<!-- Check for error -->
		<?php if($_GET["errors"]|| $_GET["success"]) {?>

			<script src="assets/js/message-setter.js"></script>
		<?php } ?>

	</body>

</html>
