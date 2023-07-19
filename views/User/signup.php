<section class="grid-2">
    <div class="signup-left d-flex-center p-f-nav">
        <form method="post">
            <h2 class="bigHeading">Créer un compte</h2>
            <p class="error-message"><?=$notification[1]?? ""?></p>
            <?= getFormErrors(); ?>
            <input type="hidden" name = "action" value = "signup">
            <input class="big-inp" type="text" name ="pnom" placeholder="Prénom" value="<?php if(!empty($_POST["pnom"])) echo htmlentities($_POST["pnom"]) ?>" required>
            <input class="big-inp" type="text" name ="nom" placeholder="Nom" value="<?php if(!empty($_POST["nom"])) echo htmlentities($_POST["nom"]) ?>" required>
            <input class="big-inp" type="date" name ="dnaissance" placeholder="Date de Naissance" required>
            <input class="big-inp" type="email" name ="email" placeholder="Email" value="<?php if(!empty($_POST["email"])) echo htmlentities($_POST["email"]) ?>" required>
            <input class="big-inp" type="password" name ="password" placeholder="Password" required>
            <input class="big-inp" type="password" name ="password2" placeholder="Retaper mot de passe" required>
            <p class="t-text">Tous champs sont obligatoires</p>
            <div class= "m-b signup-radios ">
                <input type="radio" id="loyalty" name="loyalty" value="yes" required>
                <label class="n-text t-justify" for="loyalty">J'active mon programme fidélité pour avoir accès à tous les avantages.</label>
            </div>
            <div>
                <input class="big-submit" type="submit" value="Créer mon compte">
            </div>
        </form>
    </div>

    <div class="signup-right d-flex-center-h p-f-nav">
        <div>
            <div class="signup-img-box">
                <img src="<?= URL_SITE; ?>assets/images/phone.png" alt="photo">
            </div>
            <div class="m-b-twice">
                <h3 class="midHeading">Super Aliments de Perou</h3>
                <p class="n-text"><span class="icons"><i class="fa-solid fa-medal"></i></span>Nos Produits sont bio</p>
                <p class="n-text"><span class="icons"><i class="fa-solid fa-comments-dollar"></i></span>Achetez au prix le moins cher</p>
                <p class="n-text"><span class="icons"><i class="fa-solid fa-truck-fast"></i></span>Livraison la plus rapide</p>
            </div>
            <h5 class="midHeading m-b-twice">Vous avez déjà un compte?</h5>
            <a class="a-btn t-justify" href="<?= URL_SITE; ?>?p=login">Se connecter</a>
        </div>
    </div>
</section>