<section class="p-f-nav d-flex-center">
    <div>
        <form method="post">
            <h3 class="midHeading t-justify">Accès Client</h3>
            <p class="error-message"><?=$notification[1]?? ""?></p>
            <p class="error-message"><?=$notiResetpass[1]?? ""?></p>
            <?= getFormErrors(); ?>
            <input type="hidden" name = "action" value = "login">
            <input class="big-inp" type="email" name="email" placeholder="Email" value="<?php if(!empty($_POST["email"])) echo htmlentities($_POST["email"]) ?>">
            <input class="big-inp" type="password" name="password" placeholder="Password">
            <input class="big-submit" type="submit" value="Me Connecter">
            <p class="t-justify n-text">Mot de Pass oublié? <a href="<?= URL_SITE; ?>?p=reset">Reinitialiser</a></p>
        </form>
</div>
</section>