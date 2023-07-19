<section class="p-f-nav sec-v-h d-flex-center">
    <div>
        <form method="post">
            <h3 class="midHeading t-justify">Nouveau Mot de Pass</h3>
            <p class="error-message"><?=$notiResetpass[1]?? ""?></p>
            <?= getFormErrors(); ?>
            <input type="hidden" name = "action" value = "resetpass">
            <input class="big-inp" type="password" name="password" placeholder="Nouveau Mot de Pass" required>
            <input class="big-inp" type="password" name="password2" placeholder="Re-écrivez Nouveau Mot de Pass" required>
            <input class="big-submit" type="submit" value="Reinitialiser">
        </form>
    </div>
</section>