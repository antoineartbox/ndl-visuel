<a style="padding-top:40px;" name="bloc-involve-anchor"></a>
<div id="bloc-involve" class="bloc blue">

	<div class="content-container">
        <h3>Comment est-ce que je peux m'inpliquer?</h3>
        <div class="button-container button-video">
            <div class="button call-to-action  main-page-button watch-video-involve">
                <span>Regarder la vidéo</span>
            </div>


			<div class="arrow-container">
				<a href="#bloc-involve-infos-anchor"><div><p>Continuer</p></div></a>
				<a href="#bloc-involve-infos-anchor"><span class="arrow-bottom"><img width="" height="auto" src="assets/images/component/arrow-bottom-white.png" alt=""></span></a>
			</div>
            <!--
            <div class="button call-to-action  main-page-button become-involve">
                <span>Impliquez-vous</span>
            </div>
            -->
        </div>
    </div>
</div>


<!-- Is hidden by default -->
<div id="bloc-involve-overlay">

    <div class="invole-form-container">

		<h3>Impliquez-vous</h3>
		<span class="closing-button">x</span>
        <span class="errors-display"></span>

		<form id="form-involve" class="form-user-input" action="" method="post">
            <div class="form-item">
            <span class="label">Prénom :</span>
            <input class="capital" type="text" name="firstname" value=""><br>
            </div>
            <div class="form-item">
            <span class="label">Nom :</span>
            <input class="capital" type="text" name="lastname" value=""><br>
            </div>

            <div class="form-item">
            <span class="label">Age : </span> <input type="number" name="age" value=""><br>
            </div>
            <div class="form-item">
            <span class="label">Employeur :</span> <input class="capital" type="text" name="employer" value=""><br>
            </div>
            <div class="form-item">
                <span class="label">Poste Occupé :</span> <input class="capital" type="email" name="jobtitle" value="">
            </div>

            <div class="form-item">
                <span class="label">Email :</span> <input type="email" name="email" value="">
            </div>

            <div class="form-item">
                <span class="label">À quel moment est-il mieux de vous contacter :</span> <input type="text" name="appointment" value="">
            </div>
            <input style="display:none;" type="text" name="form-type" value="involve">
            <div class="button call-to-action get-involve submit">
                <span>Envoyer</span>
            </div>

            <input style="display:none;" type="submit" name="" value="">
        </form>
    </div>
</div>

<!-- Will be hide and only display when form is submited-->
<div class="involve-form-validation-message">
    <div class="involve-form-validation-container">
        <p class="validation-message">
            Au nom du Collège Notre-Dame-de-Lourdes, merci de soutenir notre programme Alumni, qui fera une réelle différence dans le quotidien de nos étudiants. Le programme ALUMNI; redonner en créant l’avenir!
        </p>
    </div>
</div>
