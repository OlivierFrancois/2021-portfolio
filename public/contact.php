<section class="section-bloc section-contact">
    <div class="section-contact-general">
        <h1 class="section-title">Contact</h1>
        <form action="form.php" method="POST" class="form-bloc">
            <div class="form-groupe">
                <label for="nom">Nom</label>
                <input type="text" name="nom" required maxlength="255" id="nom">
            </div>
            <div class="form-groupe">
                <label for="mail">Mail</label>
                <input type="text" name="mail" required id="mail">
            </div>
            <div class="form-groupe">
                <textarea id="txt" name="message" placeholder="Votre message" required></textarea>
            </div>

            <div class="temp-contact">
            <div class="temp-contact">
                <input type="submit" value="Envoyer" class="button-sub">
            </div>
        </form>
    </div>
</section>