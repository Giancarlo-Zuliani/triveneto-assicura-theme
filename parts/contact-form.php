<form id="contact-form" action="" method="POST">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="title title-3"> Hai una domanda ? Siamo qui per aiutarti!</h2>
                <p>In milioni hanno visto la mela cadere, ma Newton è stato quello che si è chiesto perchè</p>
            </div>
            <div class="col-12">
                <div id="text-form-container" class="col-12 col-lg-8">
                    <textarea id="mail_body" style="overflow:hidden;resize:none;" placeholder="Messaggio"></textarea>
                </div>
                <div id="mail-form-container" class="col-12 clo-lg-4">
                    <input id="mail_from" type="mail" placeholder="Email">
                </div>
            </div>
            <input class="round-border" type="submit" value="Invia un messaggio">
            <div class="m-2 d-flex align-items-baseline">
                <input id="privacy_check" class="mr-1" type="checkbox" value="privacy" name="privacy-check">
                <label for="privacy-check">
                    Presa visione dell'informativa sul trattamento dei dati personali ai sensi dell’art. 13 del Regolamento (UE) 679/2016, acconsento al trattamento dei miei dati personali - <strong> privacy Policy</strong>
                </label> 
            </div>
            <div class="m-2 d-flex align-items-baseline">
                <input id="marketing_check" class="mr-1"type="checkbox" value="marketing" name="marketing-check">
                <label for="marketing">
                    Acconsento al trattamento dei dati per fini commerciali e di marketing
                </label>
            </div>
            <label>
                Questo sito è protetto da reCAPTCHA e si applicano la <strong>Privacy Policy</strong> e i <strong>Termini del servizio </strong>di Google.    
            </label>
        </div>
        <script defer src="<?php echo get_template_directory_uri() . '/assets/scripts/js/contact-form.js'?>"></script>
    </div>
</form>