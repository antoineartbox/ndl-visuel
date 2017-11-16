
<header>
    <div class="logo-container">
		<a href="http://alumni.ndl.qc.ca/"><img src="assets/images/ndl-logo-bleu.png" alt="CNDL LOGO"></a>
    </div>
	<div class="menu-hambuger">
		<span class="line-1"></span>
		<span class="line-2"></span>
		<span class="line-3"></span>
	</div>
    <div id="menu-container">

        <nav>

            <ul id="menu-div">

				<a href="#bloc-home"><li class="menu-home menu-item">Intro</li></a>
				<a href="#block-infos"><li class="menu-about menu-item menu-about">À propos</li></a>
				<a href="#bloc-events-anchor"><li class="menu-events menu-item">Événements</li></a>
				<a href="#bloc-involve-infos"><li class="menu-involve menu-item">Impliquez-vous</li></a>
				<a href="#bloc-questions-anchor"><li class="menu-question menu-item">Questions</li></a>


                <?php if(isset($_SESSION["is_logged_in"]) == FALSE) { ?>
                <a class="connection container-connection"><li class="menu-item">Connectez-vous</li></a>
                <?php }  ?>
				<li class="menu-membership">Devenir Membre</li>
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
