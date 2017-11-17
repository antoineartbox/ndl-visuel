<?php session_start(); ?>
<!-- Is hidden by default -->
<div id="bloc-login-overlay">
	<span class="closing-button">x</span>
    <?php if (!$_SESSION["is_logged_in"]) { ?>
        <div class="login-form-container">

            <h3>Entrer vos informations de connections</h3>

            <form id="loginform" class="" action="./utils/users/user_connect.php" method="post">
                <div class="form-item">
                    <span class="label">Nom d'utilisateur ou adresse courriel:</span>
                    <input type="text" name="username" value=""><br>
                </div>
                <div class="form-item">
                    <span class="label">Mot de passe :</span>
                    <input type="password" name="password" value=""><br>
                </div>
				<input style="display:none;" type="submit">
                <div class="button call-to-action login main-page-button">
                    Se connecter
                </div>
            </form>
			<div class="become-member class-to-action">
				<span>Devenir membre</span>
			</div>
        </div>
    <?php } ?>



</div>
