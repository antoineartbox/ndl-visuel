<div id="bloc-events" class="bloc white">
	<a name="bloc-events-anchor"></a>

	<div class="white-transparancy">

	</div>
	<div class="content-container">

		<div class="text-center-container">

			<div class="text-center">
				<h3>Une programmation aux couleurs du Collège NDL</h3>
				<span class="line-blue"></span>
				<p>Prenez part à nos événements exclusifs sous forme de 5@7 réseautage suivi d’une représentation offerte par des membres Alumni ou parents de la cohorte actuelle.
					Les dimensions culture, sports et vision internationale, chères à NDL, seront au rendez-vous.</p>
			</div>
		</div>

		<div id="events-container" <?php if (!$_SESSION["is_logged_in"]): ?>
			class="blocked-access blurred"
		<?php endif; ?>>
			<div class="single-event-container <?= "events-" . $i ?>">
				<span class=""></span>
				<h4>Une vision sur le monde, un panel animé par François Cardinal</h4>
				<span class="event-date">8 février 2017 - 17 h 30</span>
				<img src="assets/images/events/francois-cardinal.png" alt="Single event void">
				<p class="event-price">15 $</p>
				<p class="event-description">Avec bouchées et vin</p>
				<div class="button call-to-action">
					<a class="link-to-event" onclick="window.open('https://www.eventbrite.ca/e/billets-lancement-du-programme-alumni-du-college-notre-dame-de-lourdes-39576088145?aff=es2', '_blank')" href=""><span>RSVP</span></a>
				</div>
			</div>
			<div class="single-event-container <?= "events-" . $i ?>">
				<span class=""></span>
				<h4>À venir</h4>
				<span class="event-date">10 mai 2017 - 17 h 30 </span>
				<img src="assets/images/events/event_void.png" alt="Single event void">
				<p class="event-price">15 $</p>
				<p class="event-description">Avec bouchées et vin</p>
				<div class="button call-to-action void-event">
					<a class="link-to-event " href="https://www.eventbrite.ca/e/billets-lancement-du-programme-alumni-du-college-notre-dame-de-lourdes-39576088145?aff=es2"><span>RSVP</span></a>
				</div>
			</div>
			<div class="single-event-container <?= "events-" . $i ?>">
				<span class=""></span>
				<h4>À venir</h4>
				<span class="event-date">6 septembre 2017 - 17 h 30</span>
				<img src="assets/images/events/event_void.png" alt="Single event void">
				<p class="event-price">15 $</p>
				<p class="event-description">Avec bouchées et vin</p>
				<div class="button call-to-action void-event">
					<a class="link-to-event" href="https://www.eventbrite.ca/e/billets-lancement-du-programme-alumni-du-college-notre-dame-de-lourdes-39576088145?aff=es2"><span>RSVP</span></a>
				</div>
			</div>
		</div>


		<div class="arrow-container">
			<a href="#bloc-involve-infos">
				<div><p class="blue">Continuer</p></div>
			</a>
			<a href="#bloc-involve-infos"><span class="arrow-bottom"><img width="" height="auto" src="assets/images/component/arrow-bottom-blue.png" alt=""></span></a>
		</div>
	</div>

</div>
