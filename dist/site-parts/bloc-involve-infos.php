<div id="block">
	<div id="bloc-involve-infos" class="bloc blue">
		<span class="line-left"></span>
		<span class="line-right"></span>
		<a name="bloc-involve-infos-anchor"></a>
		<div class="bloc-container">
			<div class="bloc-content">
				<div class="text-center-container">
					<div class="center-content">
						<div class="text-center">
							<h3>Vous souhaitez redonner au Collège en contribuant à l'avenir des élèves?</h3>
						</div>
						<span class="white-line"></span>
						<div class="list-center-infos">
							<span class="by-pass-h3">Impliquez-vous à votre façon...</span>
							<ul>
								<li>- en offrant de votre temps ou expertise</li>
								<li>- en développant un projet novateur avec votre employeur</li>
								<li>- en contribuant monétairement pour soutenir un projet</li>
								<li>- ou toutes autres idées originales</li>
							</ul>
						</div>
					</div>
				</div>
			</div>


		</div>
		<div class="bloc-bottom">
			<div class="button call-to-action  main-page-button become-involve">
				<span>Je veux m'impliquer</span>
			</div>
			<div class="arrow-container">
				<a href="#bloc-questions-anchor"><div><p>Continuer</p></div></a>
				<a href="#bloc-questions-anchor"><span class="arrow-bottom"><img width="" height="auto" src="assets/images/component/arrow-bottom-white.png" alt=""></span></a>
			</div>
		</div>
	</div>
</div>



<!-- Is hidden by default -->
<div id="bloc-involve-overlay">
	<span class="closing-button">x</span>
	<div class="invole-form-container">

		<h3>Remplissez le formulaire ci-dessous pour vous inscrire afin qu’un membre de l’équipe Alumni communique avec vous pour déterminer de quelle façon vous pourriez vous impliquer.</h3>

		<span class="errors-display"></span>

		<form id="form-involve" class="form-user-input" action="" method="post">
			<div class="form-item">
				<span class="label username">Prénom* :</span>
				<input class="capital username required" type="text" name="firstname" value=""><br>
			</div>
			<div class="form-item">
				<span class="label">Nom* :</span>
				<input class="capital lastname required" type="text" name="lastname" value=""><br>
			</div>

			<div class="form-item">
				<span class="label">Âge* : </span> <input class="required age" min="16" max="115" type="number" name="age" value=""><br>
			</div>
			<div style=""class="form-item">
				<span class="label">Profession :</span> <input class="capital" type="text" name="employer" value=""><br>
			</div>
			<div class="form-item">
				<span class="label">Téléphone* :</span> <input class="capital required telephone" type="text" name="jobtitle" value="">
			</div>

			<div class="form-item">
				<span class="label">Courriel* :</span> <input class="required email" type="email" name="email" value="">
			</div>

			<div style="display:none;" class="form-item selector-item">
				<span class="label">À quel moment voulez-vous être contacté? :</span>
				<select id="involve-moment-selection">
					<option value="am">AM</option>
					<option value="midi">Midi</option>
					<option value="pm">PM</option>
					<option value="soir">Soirée</option>
				</select>
				<input class="appointment-moment" style="display:none;" type="text" name="appointment" value="">
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
			Au nom du Collège Notre-Dame-de-Lourdes, merci de soutenir notre programme Alumni, qui fera une réelle différence dans le quotidien de nos étudiants. Le programme
			ALUMNI; redonner en créant l’avenir!
		</p>
	</div>
</div>
