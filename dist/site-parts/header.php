
<header>
    <div class="logo-container">
        <img src="assets/images/cndl-logo.png" alt="CNDL LOGO">
    </div>
    <div id="menu-container">

        <nav>

            <ul id="menu-div">
                <li class="menu-infos">Intro</li>
                <li class="menu-about">À propos</li>
                <li class="menu-events">Événements</li>
                <li class="menu-involve">Impliquez-vous</li>
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
