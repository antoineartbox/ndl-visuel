
<header>
    <div class="logo-container">
        <img src="assets/images/ndl-logo-bleu.png" alt="CNDL LOGO">
    </div>
	<div class="menu-hambuger">
		<span class="line-1"></span>
		<span class="line-2"></span>
		<span class="line-3"></span>
	</div>
    <div id="menu-container">

        <nav>

            <ul id="menu-div">

                <li class="menu-infos menu-item">Intro</li>
                <li class="menu-about menu-item">À propos</li>
                <li class="menu-events menu-item">Événements</li>
                <li class="menu-involve menu-item">Impliquez-vous</li>
                <li class="menu-membership">Devenir Membre</li>

                <?php if(isset($_SESSION["is_logged_in"]) == FALSE) { ?>
                <div class="connection">
                    <h3>Déjà membre?</h3>
                    <p>Connecter-vous</p>
                </div>
                <?php }  ?>

                <?php if ($_SESSION["is_logged_in"]) { ?>
                    <div class="disconnect-user-container">
                        <div class="user-greeting">

                            <span>Bonjour <?= $_SESSION["firstname"][0];?></span>
                        </div>
                        <span><a href="utils/users/user_disconnect.php">Déconnexion</a></span>
                    </div>
                <?php } ?>
            </ul>

        </nav>
    </div>
</header>
