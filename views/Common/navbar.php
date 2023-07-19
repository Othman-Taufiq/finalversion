<nav>
    <div class="nav-top d-flex-sbetween pd">
        <a class = "logo" href="<?= URL_SITE; ?>">ESS INTIKA-3M 🌿</a>
        <!-- <a class = "logo" href="cfp">Comptoir France Pérou 🌿</a> -->
        <?php if(!is_connected()){ ?>
        <div class="nav-top-btn">
            <a href="<?= URL_SITE; ?>?p=signup">S'inscrire</a>
            <a href="<?= URL_SITE; ?>?p=login">Se connecter</a>
            <a href="<?= URL_SITE; ?>?p=contact">Contact</a>
        </div>
        <?php } else { ?>
        <div class="nav-top-btn">
            <a href="#"><i class="fa-regular fa-user" id="toggle-icon"></i></a>
            <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            <a href="<?= URL_SITE; ?>?p=contact">Nous Contacter</a>
        </div>
        <?php } ?>
    </div>

    <?php if(is_connected()){ ?>
    <div class="user-list d-flex-col" id="user-options">
        <a href="#">Mon Profil</a>
        <a href="#">Mes Commandes</a>
        <a href="#">Mes Notifications</a>
        <a href="<?= URL_SITE; ?>?logout">Se Déconnecter</a>
    </div>
    <?php } ?>

    <div class="nav-bottom pd d-flex-sbetween">
        <a href="<?= URL_SITE; ?>?p=viewproducts">Super Aliments</a>
        <a href="<?= URL_SITE; ?>?p=viewtestimonies">Avis</a>
        <a href="<?= URL_SITE; ?>?p=viewposts">Blog</a>
        <a href="<?= URL_SITE; ?>?p=voyages">Voyages</a>
        <a href="<?= URL_SITE; ?>?p=perou">Pérou</a> 
        <a href="<?= URL_SITE; ?>?p=qeros">Qeros</a>
        <a href="<?= URL_SITE; ?>?p=about">Noûs</a>
        <a href="<?= URL_SITE; ?>?p=engagement">Engagements</a>
        <a href="<?= URL_SITE; ?>?p=viewposts">News</a>
        <a href="<?= URL_SITE; ?>?p=faq">FAQ</a>
    </div>
</nav>










