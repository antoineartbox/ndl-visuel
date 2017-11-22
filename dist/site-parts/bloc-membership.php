<div id="bloc-membership" class="bloc">
    <div class="text-center-container">
        <div class="text-center">
            <p>En devenant membre, vous aurez la chance de participer à plusieurs événements ALUMNI sous forme de 5@8. Une belle façon de renforcer votre réseau professionnel et personnel ainsi que de rencontrer de talentueux étudiants et parents de la cohorte actuelle!</p>
        </div>
    </div>
    <div class="become-member-container">
        <div class="button call-to-action become-member">
            <span>Devenez-membre</span>
        </div>
    </div>
</div>

<!-- Is hidden by default -->
<div id="bloc-membership-overlay">
    <div class="membership-form-container">
        <h3>.</h3>
        <span class="closing-button">x</span>
        <form id="form-membership" class="" action="utils/forms/forms_process.php" method="post">

            <div class="form-item">
                <span class="label">Prénom :</span>
                <input class="required firstname" type="text" name="firstname" value=""><br>
            </div>
            <div class="form-item">
                <span class="label">Nom :</span>
                <input class="required lastname" type="text" name="lastname" value=""><br>
            </div>

            <div class="form-item">
                <span class="label">Âge : </span> <input class="required age" type="number" name="age" value=""><br>
            </div>

            <div class="form-item">
                <span class="label">Profession :</span> <input type="text" name="profession" value=""><br>
            </div>

            <div class="form-item">
                <span class="label">Courriel :</span> <input class="required email"type="tel" name="email" value="">
            </div>


            <div style="" class="newsletter-choice">
                <input type="checkbox" name="newsletter" value="" checked>
                <p>*En m’inscrivant, j’accepte de recevoir les informations provenant du programme Alumni.</p>
            </div>
            <div class="button  call-to-action become-member">
                <span>Envoyer<input class="membership-form-trigger" type="submit" name="membership-form" value=""></span>

            </div>
        </form>
    </div>

</div>

<!-- Will be hide and only display when form is submited-->
<div id="membership-form-validation-message">
    <div class="membership-form-validation-container">
        <p class="validation-message">Félicitations, vous êtes maintenant un membre d’Alumni. N’oubliez pas de participer aux événements pour rencontrer vos confrères et consoeurs. Sachez que vous pouvez vous désinscrire en tout temps.</p>
    </div>
</div>
