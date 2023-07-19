<section class="p-f-nav sec-v-h d-flex-center">
    <div>
        <form method="post">
            <h3 class="midHeading t-justify">Reinitialiser votre mot de passer</h3>
            <p class="n-text">Entrez un email associé à votre compte et nous vous enverrons <br> un lien pour réinitialiser votre mot de passe</p>
            <p class="error-message"><?=$notification[1]?? ""?></p>
            <?= getFormErrors(); ?>
            <input type="hidden" name = "action" value = "reset">
            <input class="big-inp" type="email" name="email" placeholder="Email" value="<?php if(!empty($_POST["email"])) echo htmlentities($_POST["email"]) ?>">
            <input class="big-submit" type="submit" value="Envoyer">
        </form>
    </div>
</section>