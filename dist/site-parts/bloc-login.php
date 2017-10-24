<?php session_start(); ?>
<!-- Is hidden by default -->
<div id="bloc-login-overlay">

    <?php if (!$_SESSION["is_logged_in"]) { ?>
        <div class="login-form-container">
            <h3>Entrer vos informations de connections</h3>
            <span class="closing-button">x</span>
            <form class="" action="./utils/users/user_connect.php" method="post">
                <div class="form-item">
                    <span class="label">Nom d'utilisateur ou adresse courriel:</span>
                    <input type="text" name="username" value=""><br>
                </div>
                <div class="form-item">
                    <span class="label">Mot de passe :</span>
                    <input type="password" name="password" value=""><br>
                </div>

                <div class="button call-to-action login">
                    <input type="submit" name="" value="Submit">
                </div>
            </form>
        </div>
    <?php } ?>

    <?php if ($_SESSION["is_logged_in"]) { ?>
        <div class="disconnect-user-container">
            <span><a href="utils/users/user_disconnect.php">Déconnexion</a></span>
        </div>
    <?php } ?>
    
</div>
