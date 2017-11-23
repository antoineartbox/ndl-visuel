<a name="block-infos"></a>
<div id="block">
	<div id="bloc-infos" class="bloc blue">

		<span class="line-left"></span>
		<span class="line-right"></span>
		<div class="content-container">

			<div class="line-wrapper">

				<div class="dual-block-container">

					<div class="bloc-title-center">
						<h3 class="first-title">Ancien élève de NDL?</h3>
						<h3>Notre groupe Alumni s’adresse à vous!</h3>
						<span class="underline"></span>
					</div>
					<div class="group-left">

						<div class="bloc-infos-container">

							<div class="text-right-container">
								<h3>Devenez membre</h3>
								<p>Joignez la grande communauté des anciens de NDL et profitez d’événements exclusifs avec d’autres alumni du Collège. Une belle façon de renforcer
									votre réseau professionnel et personnel et de rencontrer de talentueux élèves et parents de la cohorte actuelle. Faites partie
									de notre liste d’envoi pour rester informés des événements de la communauté. </p>
							</div>
						</div>


						<div class="bloc-bottom-infos">
							<div class="bloc-infos-bullet-container">
								<div class="bullet-right-container">
									<h3>Le programme Alumni, c'est : </h3>
									<div class="bullet-list-container">
										<ul>

											<li class="first">- des rencontres enrichissantes</li>
											<li>- des événements uniques</li>
											<li>- du réseautage professionnel</li>
											<li class="last">- une communauté dynamique</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="button call-to-action main-page-button  become-member">
								<span>Je m'inscris</span>
							</div>
						</div>


					</div>

					<div class="group-right">
						<div class="bloc-title-center">

							<span class="underline"></span>
							<div class="bloc-infos-container">

								<div class="text-right-container">
									<h3>Impliquez-vous</h3>
									<p>Vous souhaitez redonner au Collège NDL en contribuant à l'avenir des élèves? Impliquez-vous dans des projets novateurs et inspirants qui
										seront créés sur mesure pour vous. Chaque alumni désirant s’impliquer sera contacté par un membre de notre équipe, afin de développer un
										projet unique à son expertise et profession. </p>
								</div>
							</div>
						</div>

						<div class="bloc-bottom-infos">
							<div class="bloc-infos-bullet-container">
								<div class="bullet-right-container">
									<h3>Impliquez-vous à votre façon : </h3>
									<div class="bullet-list-container">
										<ul>

											<li class="first">- en offrant de votre temps ou expertise</li>
											<li>- en développant un projet novateur avec votre employeur</li>
											<li>- en contribuant monétairement pour soutenir un projet</li>
											<li class="last">- ou toutes autres idées originales</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="button call-to-action  main-page-button become-involve">
								<span>Je m'inscris et je m'implique</span>
							</div>
						</div>

					</div>
				</div>

			</div>

		</div>
		<div class="bloc-bottom">

			<div class="arrow-container">
				<a href="#bloc-events-anchor">
					<div><p>Continuer</p></div>
				</a>
				<a href="#bloc-events-anchor"><span class="arrow-bottom"><img width="" height="auto" src="assets/images/component/arrow-bottom-white.png" alt=""></span></a>
			</div>
		</div>
	</div>
</div>


<!-- Is hidden by default -->
<div id="bloc-membership-overlay">
	<span class="closing-button">x</span>
	<div class="membership-form-container">
		<h3>Remplissez le formulaire ci-dessous pour vous inscrire.</h3>

		<div class="errors-container">
			<!-- Refers to JS -->
		</div>

		<form id="form-membership" class="form-user-input" action="" method="post">

			<div class="form-item">
				<span class="label">Prénom* :</span>
				<input class="capital firstname required" type="text" name="firstname" value=""><br>
			</div>
			<div class="form-item">
				<span class="label">Nom* :</span>
				<input class="capital lastname required" type="text" name="lastname" value=""><br>
			</div>

			<div class="form-item">
				<span class="label ">Âge* : </span> <input class="age required" type="number" name="age" value="" min="16" max="110"><br>
			</div>

			<div class="form-item">
				<span class="label">Profession :</span> <input class="capital" type="text" name="profession" value=""><br>
			</div>

			<div class="form-item email-container">
				<span class="label">Courriel* :</span> <input class="required email" type="email" name="email" value="">
			</div>

			<div style="display:none;" class="form-item username-container">
				<span class="label">Nom d'utilisateur :</span> <input type="text" name="username" value="">
			</div>

			<div style="display:none; " class="form-item password-setter-container">
				<span class="label">Mot de passe :</span> <input type="text" name="password" value="">
				<span class="password-message-container"></span>
			</div>

			<input style="display:none;" type="form-type" name="form-type" value="membership-new-user">

			<div style="display:none;" class="newsletter-choice">
				<div class="wrapper-item-news">
					<p><input type="checkbox" name="newsletter" value="newsletter">*En m’inscrivant, j’accepte de recevoir les informations provenant du programme Alumni.</p>
				</div>
			</div>
			<div style="margin-top:15px;"class="button main-page-button call-to-action become-member submit">
				<span>Envoyer</span>
			</div>

		</form>
	</div>

</div>
