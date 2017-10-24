<div id="bloc-events" class="bloc white">
    <div class="white-transparancy">

    </div>
    <div class="content-container">
        <div class="text-center-container">
            <div class="text-center">
                <h3>Une programmation aux couleurs du collège</h3>
                <p>Culture, sports et vision internationale seront aux rendez-vous lors de ces événements uniques</p>
            </div>
        </div>

        <div id="events-container" <?php if (!$_SESSION["is_logged_in"]): ?>
            class="blocked-access blurred"
        <?php endif; ?>>
            <?php for($i = 0; $i < 4; $i++ ) { ?>
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
    </div>

</div>
