
<div id="bloc-events" class="bloc white">
	<a name="bloc-events-anchor"></a>

    <div class="white-transparancy">

    </div>
    <div class="content-container">

        <div class="text-center-container">

            <div class="text-center">
                <h3>Une programmation aux couleurs du Collège NDL</h3>
				<span class="line-blue"></span>
                <p>Prenez part à nos événements exclusifs sous forme de 5@7 réseautage suivi d’une représentation offerte par des membres Alumni ou parents de la cohorte actuelle. Les valeurs de NDL - culture, sports et vision internationale - seront au rendez-vous lors de ces prestations.</p>
            </div>

        </div>

        <div id="events-container" <?php if (!$_SESSION["is_logged_in"]): ?>
            class="blocked-access blurred"
        <?php endif; ?>>
            <?php for($i = 1; $i < 4; $i++ ) { ?>
                <div class="single-event-container <?= "events-".$i ?>">
                    <span class="over-blocker"></span>
                    <h4><?= "Événement " . $i; ?></h4>
                    <span class="event-date">8 FEV</span>
                    <img src="assets/images/events/event_void.png" alt="Single event void">
                    <p class="event-price">25$</p>
                    <p class="event-description">Inc bouchés et vin</p>
                    <div class="button call-to-action become-member">
                        <span>RSVP</span>
                    </div>
                </div>
            <?php } ?>
        </div>

		<div class="arrow-container">
			<a href="#bloc-involve-infos"><div><p class="blue">Continuer</p></div></a>
			<a href="#bloc-involve-infos"><span class="arrow-bottom"><img width="" height="auto" src="assets/images/component/arrow-bottom-blue.png" alt=""></span></a>
		</div>
	</div>

</div>
